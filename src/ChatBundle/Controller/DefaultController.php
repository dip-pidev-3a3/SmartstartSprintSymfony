<?php

namespace ChatBundle\Controller;

use AppBundle\Entity\FosUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $provider = $this->container->get('fos_message.provider');
        $threads = $provider->getSentThreads();
        $messages=$threads[0]->getMessages();
        return $this->render('@Chat/Default/index.html.twig', array('threads'=>$threads, 'messages'=>$messages));
    }
}
