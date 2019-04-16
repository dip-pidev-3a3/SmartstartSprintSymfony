<?php

namespace QandABundle\Controller;

use AppBundle\Entity\QNotification;
use AppBundle\Entity\QQuestions;
use AppBundle\Entity\QReply;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotifyController extends Controller
{
    public function notifViewedAction($idq){
        $em=$this->getDoctrine()->getManager();
        $quest=$this->getDoctrine()->getRepository(QQuestions::class)->find($idq);

        $userId= $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $replies=$this->getDoctrine()->getRepository(QReply::class)->repliesNotViewed($idq);
        foreach($replies as $rep){
            $viewed = $em->getRepository(QNotification::class)->findOneBy([ 'type' => 2,'idtype' => $rep->getId()]);
                $viewed->viewed();
        }
        $em->flush();
        $nbrquest=$this->getDoctrine()->getRepository(QQuestions::class)->getNBRQuestions($userId);
        $nbrreplies=$em->getRepository(QReply::class)->getNBRReplies($userId);
        $notif=$this->getDoctrine()->getManager()
            ->getRepository(QNotification::class)->NotViewedNotif($userId);
        return $this->render('@QandA/Default/myReplies.html.twig',array('responses'=>$replies, 'notifs' => $notif,'nq'=>$nbrquest,
            'nr'=>$nbrreplies));
    }


    public function notifView($idr){
$em=$this->getDoctrine()->getManager();
$reps=$em->getRepository(QReply::class)->notifReplies($this->container->get('security.token_storage')->getTocken()->getUser()->getId());

    }

    public function notifReplyAction(){

        $user= $this->container->get('security.token_storage')->getTocken()->getUser();
        $notifs= $this->getDoctrine()->getManager()->getRepository(QNotification::class)->findBy(['idu'=>$user]);
    }
}
