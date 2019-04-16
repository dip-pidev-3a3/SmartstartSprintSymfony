<?php

namespace AdminBundle\Controller;

use AppBundle\Entity\Application;
use AppBundle\Entity\Opportunity;
use AppBundle\Entity\FosUser;
use AppBundle\Entity\Skills;
use OpportunityBundle\Form\OpportunityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Descriptor\TextDescriptor;
use Symfony\Component\Console\Output\Output;
use Symfony\Component\Form\FormTypeInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use OpportunityBundle\Repository\OpportunityRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;

use Symfony\Component\Form\Extension\Core\Type\MoneyType;


use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

class OpportunityController extends Controller
{
    public function listoppAction(Request $request)
    {
        $opportunity=new Opportunity();
        $D=new \DateTime();
        //form
        $form=$this->createForm(OpportunityType::class,$opportunity);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {
            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em->persist($opportunity);

            $opportunity->setAuthor($user);
            $opportunity->setPostDate($D);
            $em->flush();
            return $this->redirect($request->getUri());

        }
        //envoi form

        $db = $this->getDoctrine()->getManager();

        $listopps = $db->getRepository('AppBundle:Opportunity')->findByPage(
            $request->query->getInt('page', 1),
            4
        );

        return $this->render('@Admin/Default/ListOpportunities.html.twig', array('listopps'=>$listopps,'form'=>$form->createView()));

    }

    public function UpdateAction($id,Request $request)
    {
        $opp=$this->getDoctrine()->getRepository(Opportunity::class)->find($id);
        //form
        $B=new Opportunity();
        $D=new \DateTime();

        $form=$this->createForm(OpportunityType::class,$opp);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {



            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em->persist($opp);


            $opp->setAddedDate($D);

            $em->flush();
            return $this->redirectToRoute('Admin_opportunities');

        }

        return $this->render('@Admin/Default/UpdateOpportunity.html.twig',array('form'=>$form->createView()));

    }

    public function DeleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $Opp=$em->getRepository(Opportunity::class)->find($id);
        $em->remove($Opp);
        $em->flush();

        return $this->redirectToRoute('Admin_opportunities');


    }



}
