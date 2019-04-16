<?php

namespace ApplicationBundle\Controller;

use AppBundle\Entity\Application;
use AppBundle\Entity\FosUser;
use AppBundle\Entity\Opportunity;
use ApplicationBundle\Repository\ApplicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;




class DefaultController extends Controller
{



    public function indexAction()
    {
        $alertMsg="alerte";
        return $this->render('ApplicationBundle:Default:index.html.twig');
    }

    public function displayOppsAction()
    {

        $opps = $this->getDoctrine()->getRepository(Opportunity::class)->findAll();
        return $this->render('@Application/Default/index.html.twig',
            array('opps' => $opps));

    }







    public function applyAction(Request $request){

        //reçu de l'objet avec l'id
        $app=new Application();
        $connectedUser=$this->container->get('security.token_storage')->getToken()->getUser();


        //entity manager
        $em=$this->getDoctrine()->getManager();

        if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {
            $json=array();
        if ($this->getDoctrine()->getRepository(Application::class)->hasApplied($request->request->get('id'),$connectedUser->getId())==null)
        {$app->setState("APPLIED");
        $app->setIdOpportunity($this->getDoctrine()->getRepository(Opportunity::class)->find($request->request->get('id')));

        $app->setIdFreelancer($connectedUser);
        $em->persist($app);
        $em->flush();
            $alertMsg="Success:Your Application Has been sent";

        }
        else
        {
            $alertMsg="You have Already Applied, You can't apply twice";
        } $data=array(
            'msg'=> $alertMsg,


            );$json[0]=$data;          }
        return new JsonResponse($json);
    }

    public function searchAction(Request $request){

$alertMsg = "";
        $searched=$request->get('searched');
        $wage=$request->get('wage');
        if( (isset($searched)) OR (isset($wage)) )  {
            $opps=$this->getDoctrine()->getRepository(Application::class)->chercher($searched,$wage);
            return $this->render('@Application/Default/index.html.twig',
                array('opps' => $opps,'msg'=>$alertMsg));
        }
        $opps = $this->getDoctrine()->getRepository(Opportunity::class)->findAll();
        return $this->render('@Application/Default/index.html.twig',
            array('opps' => $opps,'msg'=>$alertMsg));
    }



    public function myAppsAction()
    {
        $connectedUser=$this->container->get('security.token_storage')->getToken()->getUser();
        $apps = $this->getDoctrine()->getRepository(Application::class)->userOpps($connectedUser->getId());
        return $this->render('@Application/Default/myApps.html.twig',
            array('apps' => $apps));

    }


    public function deleteAction($id){
        //entity manager
        $em=$this->getDoctrine()->getManager();
        //reçu de l'objet avec l'id
        $app=$this->getDoctrine()->getRepository(Application::class)->find($id);
        //DELETE OBJECT FROM ORM  NB: REMOVE TE5ETH OBJECT NOT ID
        $em->remove($app);
        //delete from the DB
        $em->flush();
        return $this->redirectToRoute('my_apps');
    }


    public function pdfAction($searched)
    {


        $app=$this->getDoctrine()->getRepository(Application::class)->find($searched);

        $snappy = $this->get('knp_snappy.pdf');

        $html = $this->renderView('@Application/Default/test.html.twig', ['app'=>$app]
           );

        $filename = 'myFirstSnappyPDF';

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }


}
