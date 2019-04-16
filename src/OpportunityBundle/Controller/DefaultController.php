<?php

namespace OpportunityBundle\Controller;

use AppBundle\Entity\Application;
use AppBundle\Entity\Opportunity;
use AppBundle\Entity\FosUser;
use AppBundle\Entity\Skills;
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

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $repo = $this->getDoctrine()->getRepository(Opportunity::class);
        $em =$this->getDoctrine()->getManager();



        $opportunities = $em->getRepository('AppBundle:Opportunity')->findByPage(
            $request->query->getInt('page', 1),
            4
        );
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $repo = $this->getDoctrine()->getRepository(Application::class);
        $applications = $repo->findAll();



        return $this->render('@Opportunity/Default/index.html.twig',['controller_name'=>'DefaultController',array(
            'opportunities'=> $opportunities),'currentuser'=>$user,'applications'=>$applications]);
    }

    public function createAction(Request $request)
    {
        $opportunity = new Opportunity();
        $em=$this->getDoctrine()->getManager();

        $form = $this->createForm('OpportunityBundle\Form\OpportunityType', $opportunity);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $opportunity->setAddedDate( new \DateTime() );
            $opportunity->setJobDraft(0);
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $opportunity->setIdEntreprise($user);
            $em->persist($opportunity);
            $em->flush();
            return $this->redirectToRoute('opportunity_detailopp',['id'=>$opportunity->getIdOpp()]);
        }


        return $this->render('@Opportunity/Default/create.html.twig',['formOpportunity' => $form->createView()]);
    }

    public function editAction(Request $request,$idop)
    {

        $em=$this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository(Opportunity::class);
        $opportunity = $repo->find($idop);
        $form = $this->createForm('OpportunityBundle\Form\OpportunityType', $idop);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $opportunity->setJobDraft(0);
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $opportunity->setIdEntreprise($user);
            $em->persist($opportunity);
            $em->flush();
            return $this->redirectToRoute('opportunity_detailopp',['id'=>$opportunity]);
        }

        return $this->render('@Opportunity/Default/edit.html.twig', array(
            'opportunity' => $opportunity,
            'editform' => $form->createView()
        ));

    }


    public function detailoppAction(Request $request,$id)
    {
        $repo = $this->getDoctrine()->getRepository(Opportunity::class);
        $opp = $repo->find($id); // get application by id yjik luser
        $repo = $this->getDoctrine()->getRepository(Skills::class);
        $skills = $repo->findAll();
        $repo = $this->getDoctrine()->getRepository(Application::class);
        $em= $this->getDoctrine()->getManager();


        $accept = $repo->findOneBy(
            array('idOpportunity' => $id, 'state' => 'APPLIED')

        );


        //  $accept=$request->get('accept');
//btn btn-outline-success
//form sghayer lel bouton barka khatrek ta7an w mal9it 7ata 7al... yaatek asba
        $form = $this->createFormBuilder($accept)
            ->add('accept', SubmitType::class, [
                'label' => 'Accept'
                , 'attr' => ['class' => 'btn btn-outline-success','name' => 'accept']])
            ->add('reject', SubmitType::class, ['label' => 'Reject',
                'attr' => ['class' => 'btn btn-outline-danger','name'=>'reject']])
            ->getForm();
        $form->handleRequest($request);
        $form2 = $this->createFormBuilder($accept)
            ->add('reject', SubmitType::class, ['label' => 'Reject','attr' => ['class' => 'btn btn-outline-danger']])
            ->getForm();
        $form2->handleRequest($request);

        if ($form->isSubmitted() ) {


            if ($form->getClickedButton() && 'accept' === $form->getClickedButton()->getName()) {
                $accept->setState("ACCEPTED");
                $em->persist($accept);
                $em->flush();
                return $this->redirectToRoute('opportunity_homepage');

            }
            if ($form->getClickedButton() && 'reject' === $form->getClickedButton()->getName()) {


                $accept->setState("REJECTED");
                $em->persist($accept);
                $em->flush();
                return $this->redirectToRoute('opportunity_homepage');
            }



        }






        $applications = $repo->findBy(
            ['idOpportunity' => $id]
        );
        return $this->render('@Opportunity/Default/detailopp.html.twig',['controller_name'=>'DefaultController','opporutnity'=>$opp,'skills'=>$skills,'applications'=>$applications,'Formaccept' => $form->createView()]);

    }

    /*  public function AcceptApplicantAction(Request $request ,$id)
      {
          $repo = $this->getDoctrine()->getRepository(Application::class);
          $em= $this->getDoctrine()->getManager();

          $application = $repo->find($id);
          $application->setState("ACCEPTED");

          $em->persist($application);
          $em->flush();
          $idop = $application->getIdOpportunity();
          return $this->render('@Opportunity/Default/detailopp.html.twig',['opporutnity'=>$idop]);

      }*/





    public function DeleteOppAction(Request $request ,$id)//routing
    {
        $em=$this->getDoctrine()->getManager();
        $Opp=$em->getRepository(Opportunity::class)->find($id);
        $em->remove($Opp);
        $em->flush();

        return $this->redirectToRoute("opportunity_homepage");

    }
    public function sendmailAction(Request $request ,$to,$MailObject,$mailContent,$id,\Swift_Mailer $mailer)//routing
    {
        $em=$this->getDoctrine()->getManager();
        $Opp=$em->getRepository(Opportunity::class)->find($id);
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $message = (new \Swift_Message('Hello Email'))
            ->setFrom($user->getEmail())
            ->setTo($to)
            ->setBody($mailContent
            )

        ;
        $mailer->send($message);

        return $this->redirectToRoute('opportunity_detailopp',['id'=>$Opp->getIdOpp()]);

    }

    public function rechercheAction(Request $request)
    {
        $searched=$request->get('searched');
        if( isset($searched) )  {

            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $repo = $this->getDoctrine()->getRepository(Application::class);
            $applications = $repo->findAll();
            $em =$this->getDoctrine()->getManager();
            $opportunities = $this->getDoctrine()->getRepository(Opportunity::class)->findsearched(1,4,$searched);


            return $this->render('@Opportunity/Default/index.html.twig',['controller_name'=>'DefaultController','opportunities'=>$opportunities,'currentuser'=>$user,'applications'=>$applications]);
        }

        $repo = $this->getDoctrine()->getRepository(Opportunity::class);
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $repo = $this->getDoctrine()->getRepository(Application::class);
        $applications = $repo->findAll();
        $em =$this->getDoctrine()->getManager();

        $opportunities = $em->getRepository('AppBundle:Opportunity')->findByPage(
            $request->query->getInt('page', 1),
            4
        );


        return $this->render('@Opportunity/Default/index.html.twig',['controller_name'=>'DefaultController','opportunities'=>$opportunities,'currentuser'=>$user,'applications'=>$applications]);


    }

    /**
     * Lists all opportunity entities.
     *
     * @Route("/", name="opportunity_index")
     * @Method("GET")
     */


    /**
     * Creates a new opportunity entity.
     *
     * @Route("/new", name="opportunity_new")
     * @Method({"GET", "POST"})
     */
    /*
    public function newAction(Request $request)
    {
        $opportunity = new Opportunity();
        $form = $this->createForm('AppBundle\Form\OpportunityType', $opportunity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($opportunity);
            $em->flush();

            return $this->redirectToRoute('opportunity_show', array('idOpp' => $opportunity->getIdopp()));
        }

        return $this->render('opportunity/new.html.twig', array(
            'opportunity' => $opportunity,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a opportunity entity.
     *
     * @Route("/{idOpp}", name="opportunity_show")
     * @Method("GET")
     */
    /*   public function showAction(Opportunity $opportunity)
       {
           $deleteForm = $this->createDeleteForm($opportunity);

           return $this->render('opportunity/show.html.twig', array(
               'opportunity' => $opportunity,
               'delete_form' => $deleteForm->createView(),
           ));
       }

       /**
        * Displays a form to edit an existing opportunity entity.
        *
        * @Route("/{idOpp}/edit", name="opportunity_edit")
        * @Method({"GET", "POST"})
        */
    /* public function ediXtAction(Request $request,$opportunity)
     {
         $deleteForm = $this->createDeleteForm($opportunity);
         $editForm = $this->createForm('AppBundle\Form\OpportunityType', $opportunity);
         $editForm->handleRequest($request);

         if ($editForm->isSubmitted() && $editForm->isValid()) {
             $this->getDoctrine()->getManager()->flush();

             return $this->redirectToRoute('opportunity_edit', array('idOpp' => $opportunity->getIdopp()));
         }

         return $this->render('OpportunityBundle\Resources\views\Default\edit.html.twig', array(
             'opportunity' => $opportunity,
             'edit_form' => $editForm->createView(),
             'delete_form' => $deleteForm->createView(),
         ));
     }

     /**
      * Deletes a opportunity entity.
      *
      * @Route("/{idOpp}", name="opportunity_delete")
      * @Method("DELETE")
      */
    /*  public function deleteAction(Request $request, Opportunity $opportunity)
      {
          $form = $this->createDeleteForm($opportunity);
          $form->handleRequest($request);

          if ($form->isSubmitted() && $form->isValid()) {
              $em = $this->getDoctrine()->getManager();
              $em->remove($opportunity);
              $em->flush();
          }

          return $this->redirectToRoute('opportunity_index');
      }

      /**
       * Creates a form to delete a opportunity entity.
       *
       * @param Opportunity $opportunity The opportunity entity
       *
       * @return \Symfony\Component\Form\Form The form
       */
    /* private function createDeleteForm(Opportunity $opportunity)
     {
         return $this->createFormBuilder()
             ->setAction($this->generateUrl('opportunity_delete', array('idOpp' => $opportunity->getIdopp())))
             ->setMethod('DELETE')
             ->getForm()
             ;
     }
 */
}
