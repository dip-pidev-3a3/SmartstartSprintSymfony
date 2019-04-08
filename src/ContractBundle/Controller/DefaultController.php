<?php

namespace ContractBundle\Controller;


use AppBundle\Entity\Contract;
use AppBundle\Entity\FosUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Validator\Constraints\NotBlank;



class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $user=new FosUser();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $contracts = $this->getDoctrine()->getRepository(Contract::class)->getMyContracts($user->getId());

        $form = $this->get('form.factory')
            ->createNamedBuilder('payment-form')
            ->add('token', HiddenType::class, [
                'constraints' => [new NotBlank()],
            ])
            ->getForm();

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isValid()&&$form->isSubmitted()) {
                // TODO: charge the card
                $stripeClient = $this->get('my.stripe.client');
                $stripeClient->createCharge(111.12*100, "eur", $form->get('token')->getData(), null, "in cents", "Pay Freelancer");
                return $this->redirectToRoute('my_contracts');
            }
        }

        return $this->render('@Contract/Default/index.html.twig',array('con'=>$contracts,'form' => $form->createView(),
            'stripe_public_key' => "pk_test_RzueYgRk554ZpsUNBPruZ42P"));
    }
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $contract = $em->getRepository(Contract::class)->find($id);
        $em->remove($contract);
        $em->flush();
        return $this->redirectToRoute('my_contracts');
    }
    public function lowAction()
    {
        $user=new FosUser();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $contracts = $this->getDoctrine()->getRepository(Contract::class)->getMyLowContracts($user->getId());
        return $this->render('@Contract/Default/lowContracts.html.twig',array('con'=>$contracts));
    }
    public function updateAction(Request $request,$id)
    {
        $contract = new Contract();
        $em = $this->getDoctrine()->getManager();
        $contract = $em->getRepository(Contract::class)->find($id);
        $contract->setStartDate(new \DateTime($request->request->get('start')));
        $contract->setFinishDate(new \DateTime($request->request->get('finish')));
        $contract->setSum($request->request->get('sum'));
        $contract->setPaymentMethod($request->request->get('paymentMethod'));
        $contract->setPrio(1);
        $em->persist($contract);
        $em->flush();
        return $this->redirectToRoute('my_contracts');
    }
    public function freelancerContractsAction()
    {
        $user=new FosUser();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $contracts = $this->getDoctrine()->getRepository(Contract::class)->freelancerContracts($user->getId());
        return $this->render('@Contract/Default/freelancerContracts.html.twig',array('con'=>$contracts));
    }
    public function printAction($id){
        $em = $this->getDoctrine()->getManager();
        $contract = $em->getRepository(Contract::class)->find($id);
        $snappy = $this->get("knp_snappy.pdf");
        $html = "<h1>CONTRACT</h1>
                <p></p>
                ";
        $fileName = $contract->getIdApplication()->getIdOpportunity()->getJobTitle();
        return new Response($snappy->getOutputFromHtml($html),200,array('Content-Type' => 'application/pdf','Content-Disposition' => 'attachment; filename="'.$fileName.'.pdf"'));
    }
}
