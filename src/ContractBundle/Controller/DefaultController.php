<?php

namespace ContractBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Contract;
use AppBundle\Entity\FosUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ContractBundle\Form\ContractType;
use ContractBundle\Repository\ContractRepository;

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
    public function lowAction()
    {
        $contract = new Contract();
        $form = $this->createForm(ContractType::class,$contract);
        $user=new FosUser();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $contracts = $this->getDoctrine()->getRepository(Contract::class)->getMyLowContracts($user->getId());
        return $this->render('@Contract/Default/lowContracts.html.twig',array('con'=>$contracts,'form'=>$form->createView()));
    }
}
