<?php

namespace QandABundle\Controller;

use AppBundle\Entity\QNotification;
use AppBundle\Entity\QReply;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotifyController extends Controller
{
    public function notifViewedAction($idr){
$em=$this->getDoctrine()->getManager();
$reps=$em->getRepository(QReply::class)->notifReplies($this->container->get('security.token_storage')->getTocken()->getUser()->getId());

    }

    public function notifReplyAction(){

        $user= $this->container->get('security.token_storage')->getTocken()->getUser();
        $notifs= $this->getDoctrine()->getManager()->getRepository(QNotification::class)->findBy(['idu'=>$user]);
    }
}
