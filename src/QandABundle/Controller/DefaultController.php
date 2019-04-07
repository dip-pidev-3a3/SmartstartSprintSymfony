<?php

namespace QandABundle\Controller;

use AppBundle\Entity\QNotification;
use AppBundle\Entity\QQuestions;
use AppBundle\Entity\QReply;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {

        $em=$this->getDoctrine()->getManager();
        $sub=$this->getDoctrine()->getManager();

        $userId= $this->container->get('security.token_storage')->getToken()->getUser();
        $questions=$this->getDoctrine()->getRepository(QQuestions::class)->getNewestQuestions();

        if($this->container->get('security.token_storage')->getToken()->getUser()!=null) {
            $notif=$em->getRepository(QNotification::class)->NotViewedNotif($userId->getId());
            $nbrquest = $this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId->getId());
            $nbrreplies = $this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId->getId());
            return $this->render('@QandA/Default/index.html.twig', array('questions' => $questions, 'notifs' => $notif,
                'nq' => $nbrquest, 'nr' => $nbrreplies));
        }
        else{
            return $this->render('@QandA/Default/index.html.twig', array('questions' => $questions, 'subjects' => $sub,
                'nq' => 0, 'nr' => 0));
        }
    }

    public function displayAsAction($as){

        switch ($as) {
            case 1:
                {
                    $quest = $this->getDoctrine()->getRepository(QQuestions::class)->getAnseweredQuestions();
                    break;
                }
            case 2:
                {
                    $quest = $this->getDoctrine()->getRepository(QQuestions::class)->getNotAnseweredQuestions();
                    break;
                }
        }
        return $this->render('@QandA/Default/homepage.html.twig',array('questions'=>$quest));
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
        $userId= $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $nbrquest=$this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId);
        $nbrreplies=$this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId);
        return $this->render('@QandA/Default/index.html.twig',array('questions'=>$quest,'nq'=>$nbrquest,
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

        $userId= $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $nbrquest=$this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId);
        $nbrreplies=$this->getDoctrine()->getRepository(QReply::class)->getNBRReplies($userId);
        return $this->render('@QandA/Default/myReplies.html.twig',array('responses'=>$quest,'nq'=>$nbrquest,
            'nr'=>$nbrreplies));
    }

    public function homeAction()
    {
        $questions=$this->getDoctrine()->getRepository(QQuestions::class)->getNewestQuestions();
            return $this->render('@QandA/Default/homepage.html.twig', array('questions' => $questions));

    }
}
