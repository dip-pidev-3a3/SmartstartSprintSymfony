<?php

namespace ChatBundle\Controller;

use AppBundle\Entity\FosUser;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $provider = $this->container->get('fos_message.provider');
        $threads = $provider->getSentThreads();
        $messages=$threads[0]->getMessages();
        $idT=$threads[0]->getId();
        $msg="";
        return $this->render('@Chat/Default/index.html.twig', array('threads'=>$threads, 'messages'=>$messages, 'idT'=>$idT,'msg'=>$msg));
    }
    public function sendAction(Request $request)
    {
        $sender=$this->container->get('security.token_storage')->getToken()->getUser();
        $provider = $this->container->get('fos_message.provider');
        $thread = $provider->getThread($request->request->get('idT'));
        $composer = $this->container->get('fos_message.composer');
        $message = $composer->reply($thread)
            ->setSender($sender)
            ->setBody($request->request->get('msg'))
            ->getMessage();
        $send = $this->container->get('fos_message.sender');
        $send->send($message);
    }
    public function getInitMessagesAction(Request $request){

        $provider = $this->container->get('fos_message.provider');
        $threads = $provider->getSentThreads();
        $messages=$threads[0]->getMessages();

        if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {
            $jsonData = array();
            $idx = 0;
            foreach($messages as $msg) {
                $data = array(
                    'body' => $msg->getBody(),
                    'sender' => $msg->getSender()->getId(),
                );
                $jsonData[$idx++] = $data;
            }
            return new JsonResponse($jsonData);
        }
    }
    public function changeAction(Request $request){

        $provider = $this->container->get('fos_message.provider');
        $thread = $provider->getThread($request->request->get('id'));
        $messages=$thread->getMessages();

        if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {
            $json = array();
            $idx = 0;
            foreach($messages as $msg) {
                $data = array(
                    'body' => $msg->getBody(),
                    'sender' => $msg->getSender()->getId(),
                );
                $json[$idx++] = $data;
            }
            return new JsonResponse($json);
        }
    }
}
