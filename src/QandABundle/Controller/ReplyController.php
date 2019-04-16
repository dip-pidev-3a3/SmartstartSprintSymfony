<?php

namespace QandABundle\Controller;

use AppBundle\Entity\QNotification;
use AppBundle\Entity\QClouds;
use AppBundle\Entity\QQuestions;
use AppBundle\Entity\QReply;
use AppBundle\Entity\QVotes;
use QandABundle\Form\QCloudsType;
use QandABundle\Form\QReplyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ReplyController extends Controller
{
    public function replyQuestionAction(Request $request, $idq){
        $em=$this->getDoctrine()->getManager();
        $quest=$em->getRepository(QQuestions::class)->find($idq);

       $responses=$em->getRepository(QReply::class)->findBy(['idq'=>$idq]);
    return $this->render('@QandA/Reply/showQuestion.html.twig',array('responses'=>$responses,'quest'=>$quest));

    }

    public function updateReplyAction(Request $request,$idr){
        $em=$this->getDoctrine()->getManager();
        $reply=$em->getRepository(QReply::class)->find($idr);
        $fr=$this->createForm(QReplyType::class,$reply);
        $fr=$fr->handleRequest($request);
if($reply->getIdc()==null) {
    $cloud = new QClouds();
}else {
    $cloud= $em->getRepository(QClouds::class)->find($reply->getIdc());
}
        $fc=$this->createForm(QCloudsType::class,$cloud);
        $fc=$fc->handleRequest($request);

        if($fr->isValid()){
           /* if($fc->isValid()){
                if($cloud->getPosted()==null) {
                    $cloud->setPosted(new \DateTime('now'));
                    $em->persist($cloud);
                }
                $reply->setIdc($cloud);
            }*/
            $em->flush();
            return $this->redirectToRoute('reply_question',array('idq'=>$reply->getIdq()->getId()));
        }


        $userId= $this->container->get('security.token_storage')->getToken()->getUser();
        $nbrquest=$this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId->getId());
        $nbrreplies=$this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId->getId());
        return $this->render('@QandA/Reply/updateReply.html.twig',array('form'=>$fr->createView(),'cl'=>$fc->createView(),
            'nq'=>$nbrquest,'nr'=>$nbrreplies,'quest'=>$reply->getIdq()));
    }

    public function deleteReplyAction(Request $request,$idr){
        $em=$this->getDoctrine()->getManager();
        $reply=$em->getRepository(QReply::class)->find($idr);
$quest=$reply->getIdq()->getId();
        $em->remove($reply);
        $em->flush();
        return $this->redirectToRoute('reply_question',array('idq'=>$quest));
    }

    public function satisfyMeAction($idr){
        $em=$this->getDoctrine()->getManager();
        $reply=$em->getRepository(QReply::class)->find($idr);
        $reply->setTheAnswer(new \DateTime('now'));
        $reply->getIdq()->setAnswered(new \DateTime('now'));
        $em->flush();

        return $this->redirectToRoute('reply_question',array('idq'=>$reply->getIdq()->getId()));
    }

    public function upVoteAction($idr,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $reply=$this->getDoctrine()->getRepository(QReply::class)->find($idr);
        $hasvoted=$this->getDoctrine()->getRepository(QVotes::class)->findOneBy(['idr' => $idr,'idu'=>$user->getId()]);

        if($hasvoted==null)
        {
            $vote=new QVotes();
            $em->getRepository('AppBundle:QReply')-> upVote($idr);
            $vote->setType(1);
            $vote->setIdu($user);
            $vote->setIdr($reply);
            $reply->upScore();
            $em->persist($vote);
            $em->flush();
        }
        else {
            if($hasvoted->getType()==2){
            $hasvoted->setType(1);
                $reply->upScore();
            $em->flush();
            }
        }
        return new JsonResponse(['votes' => $reply->getScore()]);
    }

    public function downVoteAction($idr){
        $em=$this->getDoctrine()->getManager();
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $reply=$this->getDoctrine()->getRepository(QReply::class)->find($idr);
        $hasvoted=$this->getDoctrine()->getRepository(QVotes::class)->findOneBy(['idr' => $idr,'idu'=>$user->getId()]);

        if($hasvoted==null)
        {
            $vote=new QVotes();
            $em->getRepository('AppBundle:QReply')-> downVote($idr);
            $vote->setType(2);
            $vote->setIdu($user);
            $vote->setIdr($reply);
            $em->persist($vote);
            $reply->downScore();
            $em->flush();
        }
        else {
            if($hasvoted->getType()==1){
                $hasvoted->setType(2);
                $reply->downScore();
                $em->flush();
            }
        }
        return new JsonResponse(['votes' => $reply->getScore()]);

    }

    public function signalReplyAction($id){
        $em=$this->getDoctrine()->getManager();
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $reply=$this->getDoctrine()->getRepository(QReply::class)->find($id);
        $hasSignaled=$this->getDoctrine()->getRepository(QVotes::class)->findOneBy(['idr' => $id,'type'=>3,'idu'=>$user->getId()]);
        if($hasSignaled==null)
        {
            $vote=new QVotes();
            $vote->setType(3);
            $vote->setIdu($user);
            $vote->setIdr($reply);
            $reply->incrementSignal();
            $em->persist($vote);
            $em->persist($reply);
            $em->flush();
        }

        return $this->redirectToRoute('reply_question',array('idq'=>$reply->getIdq()->getId()));
    }
}
