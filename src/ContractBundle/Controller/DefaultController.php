<?php

namespace ContractBundle\Controller;


use AppBundle\Entity\Contract;
use AppBundle\Entity\FosUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class DefaultController extends Controller
{
    public function indexAction()
    {
        $user=new FosUser();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $contracts = $this->getDoctrine()->getRepository(Contract::class)->getMyContracts($user->getId());
        return $this->render('@Contract/Default/index.html.twig',array('con'=>$contracts));
    }
    public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $contract = $em->getRepository(Contract::class)->find($id);
        $em->remove($contract);
        $em->flush();
        return $this->redirectToRoute('my_contracts');
    }
    public function lowAction(Request $request,$id=null,$start=null,$finish=null,$sum=null,$payment=null)
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
