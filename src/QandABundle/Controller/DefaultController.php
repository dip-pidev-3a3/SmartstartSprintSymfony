<?php

namespace QandABundle\Controller;

use AppBundle\Entity\QNotification;
use AppBundle\Entity\QQuestions;
use AppBundle\Entity\QReply;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {


        $userId= $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $questions=$this->getDoctrine()->getRepository(QQuestions::class)->getNewestQuestions();

          $notif=$this->getDoctrine()->getRepository(QNotification::class)->NotViewedNotif($userId);
            $nbrquest = $this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId);
            $nbrreplies = $this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId);
            return $this->render('@QandA/Default/index.html.twig', array('questions' => $questions, 'notifs' => $notif,
                'nq' => $nbrquest, 'nr' => $nbrreplies));

    }

    public function displayAsAction(Request $request,$as){

    if($as<3) {
        switch ($as) {
            case 1 :{
                    $quest = $this->getDoctrine()->getRepository(QQuestions::class)->getAnseweredQuestions();
                    break;  }
            case 2:{
                    $quest = $this->getDoctrine()->getRepository(QQuestions::class)->getNotAnseweredQuestions();
                    break;  }
            case 3:{
                $quest = $this->getDoctrine()->getRepository(QQuestions::class)->getQuestionsBySubject($request->get('subject')->getValue());
                break;  }
        }

    $userId = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
    $notif = $this->getDoctrine()->getManager()
        ->getRepository(QNotification::class)->NotViewedNotif($userId);
    $nbrquest = $this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId);
    $nbrreplies = $this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId);
    return $this->render('@QandA/Default/index.html.twig', array('questions' => $quest, 'notifs' => $notif, 'nq' => $nbrquest,
        'nr' => $nbrreplies));
    }else{
        switch ($as) {
            case 4 :{
             $quest = $this->getDoctrine()->getRepository(QQuestions::class)->getAnseweredQuestions();
              break;  }
            case 5:{
             $quest = $this->getDoctrine()->getRepository(QQuestions::class)->getNotAnseweredQuestions();
              break;  }
            case 6:{
             $quest = $this->getDoctrine()->getRepository(QQuestions::class)->getQuestionsBySubject($request->get('subject')->getValue());
              break;  }
        }
        $sub=$request->get('subject');
        if(isset($sub)) {

        }
            return $this->render('@QandA/Default/index.html.twig',array('questions'=>$quest));
    }
    }

    public function displayQAsAction($as){

        $userId= $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        switch ($as){
            case 11:{
                $quest=$this->getDoctrine()->getRepository(QQuestions::class)->getAUserQuestions($userId);
                break;
            }
            case 12:{
                $quest=$this->getDoctrine()->getRepository(QQuestions::class)->getNAUserQuestions($userId);
                break;
            }
            case 13:{
                $quest=$this->getDoctrine()->getRepository(QQuestions::class)->getNotRepliedQuestion($userId);
                break;
            }
            case 14:{
                $quest=$this->getDoctrine()->getRepository(QQuestions::class)->getNotAnseweredQuestions();
                break;
            }
        }
        $notif=$this->getDoctrine()->getManager()
            ->getRepository(QNotification::class)->NotViewedNotif($userId);
        $nbrquest=$this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId);
        $nbrreplies=$this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId);
        return $this->render('@QandA/Default/index.html.twig',array('questions'=>$quest, 'notifs' => $notif,'nq'=>$nbrquest,
            'nr'=>$nbrreplies));
    }

    public function displayRAsAction($as){
        $userId= $this->container->get('security.token_storage')->getToken()->getUser()->getId();

        switch ($as){

            case 21:{
                $quest=$this->getDoctrine()->getRepository(QReply::class)->getTopReplies($userId);
                break;
            }
            case 22:{
                $quest=$this->getDoctrine()->getRepository(QReply::class)->getNotVoted();
                break;
            }

        }
        $notif=$this->getDoctrine()->getManager()
            ->getRepository(QNotification::class)->NotViewedNotif($userId);

        $nbrquest=$this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId);
        $nbrreplies=$this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId);
        return $this->render('@QandA/Default/myReplies.html.twig',array('responses'=>$quest, 'notifs' => $notif,'nq'=>$nbrquest,
            'nr'=>$nbrreplies));
    }

    public function homeAction()
    {
        $questions=$this->getDoctrine()->getRepository(QQuestions::class)->getNewestQuestions();
            return $this->render('@QandA/Default/index.html.twig', array('questions' => $questions));

    }

    public function showQuestionAction($idq){
        $em=$this->getDoctrine()->getManager();
        $quest=$em->getRepository(QQuestions::class)->find($idq);

        $responses=$em->getRepository(QReply::class)->findBy(['idq'=>$idq]);
        return $this->render('@QandA/Default/showQuestions.html.twig',array('responses'=>$responses,'quest'=>$quest));

    }
}
