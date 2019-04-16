<?php

namespace QandABundle\Controller;

use AppBundle\Entity\QClouds;
use AppBundle\Entity\QNotification;
use AppBundle\Entity\QQuestions;
use AppBundle\Entity\QReply;
use AppBundle\Entity\QVotes;
use QandABundle\Form\QCloudsType;
use QandABundle\Form\QQuestionsType;
use QandABundle\Form\QReplyType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class QuestionController extends Controller
{
    public function addQuestionAction(Request $request){
        $quest=new QQuestions();
        $cloud=new QClouds();
        $fq=$this->createForm(QQuestionsType::class,$quest);
        $cl=$this->createForm(QCloudsType::class,$cloud);
        $fq=$fq->handleRequest($request);
        $cl=$cl->handleRequest($request);

        $userId= $this->container->get('security.token_storage')->getToken()->getUser();
        if($fq->isValid()){
            $quest->setIdu($userId);
           if($cl->isValid()) {
               $cloud->setPosted(new \DateTime('now'));
               $quest->setIdc($cloud->getId());
           }
            $em= $this->getDoctrine()->getManager();
            $em->persist($quest);
            $em->flush();
            return $this->redirectToRoute('qand_a_homepage');
        }
        $notif=$this->getDoctrine()->getRepository(QNotification::class)->NotViewedNotif($userId->getId());
        $nbrquest=$this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId->getId());
        $nbrreplies=$this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId->getId());

        return $this->render('@QandA/Crud/addQuestion.html.twig',array('form'=>$fq->createView(),'cl'=>$cl->createView(),
            'nq'=>$nbrquest,'nr'=>$nbrreplies, 'notifs' => $notif));
    }
    
    public function updateQuestionAction(Request $request,$id){
        $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository(QQuestions::class)->find($id);
        $fq=$this->createForm(QQuestionsType::class,$question);
        $fq=$fq->handleRequest($request);

        $userId= $this->container->get('security.token_storage')->getToken()->getUser();
        if($question->getIdc()!= null) {
            $cloud = $em->getRepository(QClouds::class)->find($question->getIdc());
        }else{
            $cloud= new QClouds();
        }
        $fc=$this->createForm(QCloudsType::class,$cloud);
        $fc=$fc->handleRequest($request);

        if($fq->isValid()){
            if($fc->isValid()) {
                $cloud->setPosted(new \DateTime('now'));
                $question->setIdc($cloud->getId());
            }
            $em->flush();
            return $this->redirectToRoute('qand_a_homepage');
        }

        $notif=$this->getDoctrine()->getRepository(QNotification::class)->NotViewedNotif($userId->getId());
        $nbrquest=$this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId->getId());
        $nbrreplies=$this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId->getId());
        return $this->render('@QandA/Crud/updateQuestion.html.twig',array('form'=>$fq->createView(),'cl'=>$fc->createView(),
            'nq'=>$nbrquest,'nr'=>$nbrreplies, 'notifs' => $notif));
    }

    public function deleteQuestionAction(Request $request,$id){
    $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository(QQuestions::class)->find($id);
        if($question->getIdc()!= null){
            $cloud= $em->getRepository(QClouds::class)->find($question->getIdc());
        $em->remove($cloud);
        }
        $em->remove($question);
        $em->flush();

        return $this->redirectToRoute('show_myquestions');
    }

    public function showMyQuestionsAction(){
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $quest=$this->getDoctrine()->getRepository(QQuestions::class)
            ->findBy(['idu'=>$user]);
        return $this->redirectToRoute('qand_a_homepage');
    }



    public function replyQuestionAction(Request $request, $idq){
        $em=$this->getDoctrine()->getManager();
        $quest=$em->getRepository(QQuestions::class)->find($idq);

        $userId= $this->container->get('security.token_storage')->getToken()->getUser();
        $reply=new QReply();

        $fr=$this->createForm(QReplyType::class,$reply);

        $fr=$fr->handleRequest($request);

        if( $fr->isValid()){
            $reply->setIdq($quest);
            $reply->setIdu($userId);
            $quest->incrementReplies();
            $em->persist($reply);
            $em->flush();
            // delete this line after testing the notification
            // =========notify the question'owner ==========
                if($userId != $quest->getIdu()) {
                    $not = new QNotification();
                    $not->setDeclanched(new \DateTime('now'));
                    $not->setIdu($quest->getIdu());
                    $not->setType(2);
                    $not->setIdtype($reply->getId());

                    $em->persist($not);
                }
            // ===============                       ==========
            $em->flush();
        }
        $notif=$this->getDoctrine()->getRepository(QNotification::class)->NotViewedNotif($userId->getId());
        $responses=$em->getRepository(QReply::class)->findBy(['idq'=>$idq]);
        $nbrquest=$this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId->getId());
        $nbrreplies=$this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId->getId());
        return $this->render('@QandA/Reply/replyQuestion.html.twig',array('fr'=>$fr->createView()
        ,'responses'=>$responses,'quest'=>$quest,'nq'=>$nbrquest,
            'nr'=>$nbrreplies, 'notifs' => $notif));

    }

    public function signalQuestionAction($id){
            $em=$this->getDoctrine()->getManager();
            $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $quest=$em->getRepository(QQuestions::class)->find($id);
            $hasSignaled=$this->getDoctrine()->getRepository(QVotes::class)->findOneBy(['idq' => $id,'type'=>4,'idu'=>$user->getId()]);
            if($hasSignaled==null)
            {
                $vote=new QVotes();
                $vote->setType(4);
                $vote->setIdu($user);
                $vote->setIdq($quest);
                $quest->incrementSignal();
                $em->persist($vote);
                $em->persist($quest);
                $em->flush();
            }
        return $this->redirectToRoute('qand_a_homepage');
        }
}
