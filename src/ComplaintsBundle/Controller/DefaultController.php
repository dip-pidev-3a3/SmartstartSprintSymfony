<?php

namespace ComplaintsBundle\Controller;

use AppBundle\Entity\Complaints;
use AppBundle\Entity\Opportunity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ComplaintsBundle\Form;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\FosUser;




class DefaultController extends Controller
{
    public function indexAction()
    {

        return $this->render('@Complaints/Default/index.html.twig');
    }
    public function addAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $c=new Complaints();
        $form=$this->createForm(Form\ComplaintsType::class,$c);
        $form=$form->handleRequest($request);
        if (($form->isSubmitted())&&($form->isValid()))
        {
            $o=$this->getDoctrine()->getRepository(Opportunity::class)->find(1);
            $c->setIdOpp($o);
            $u=new FosUser();
            $u=$this->container->get('security.token_storage')->getToken()->getUser();
            $c->setIdUser($u);
            $em->persist($c);
            $em->flush();
            return $this->redirectToRoute('addComplaint_homepage');
        }
        return $this->render('@Complaints/Default/addComplaint.html.twig',array('form'=>$form->createView()));
    }
    public function add2Action(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $c=new Complaints();
        $u=new FosUser();
        $u=$this->container->get('security.token_storage')->getToken()->getUser();
        $c->setIdUser($u);
        $c->setAddedDate(new \DateTime());
        $c->setSubject($request->request->get('subject'));
        $c->setContent($request->request->get('message'));
        $c->setMailUser($request->request->get('email'));
        $em->persist($c);
        $em->flush();
        return $this->redirectToRoute('complaints_homepage');

    }
    public function afficherAction(Request $request)
    {
        $user=new FosUser();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $complaints = $this->getDoctrine()->getRepository(Complaints::class)->findBy(array('idUser' => $user->getId()));


        $db = $this->getDoctrine()->getManager();
        $payment = $db->getRepository(Complaints::class)->findByPage(
            $request->query->getInt('page', 1),
            3,$user->getId());



        return $this->render('@Complaints/Default/afficher.html.twig',array('con'=>$payment));

    }

    public function removeAction($id)
    {
        $complaints = $this->getDoctrine()->getRepository(Complaints::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($complaints);
        $em->flush();
        return $this->redirectToRoute('afficher_complaint');

    }
}
