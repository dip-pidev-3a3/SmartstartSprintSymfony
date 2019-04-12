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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;



class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationBundle:Default:index.html.twig');
    }

    public function displayOppsAction()
    {

        $opps = $this->getDoctrine()->getRepository(Opportunity::class)->findAll();
        return $this->render('@Application/Default/index.html.twig',
            array('opps' => $opps));

    }





    public function applyAction($idOpportunity){

        //reçu de l'objet avec l'id
        $app=new Application();
        $connectedUser=$this->container->get('security.token_storage')->getToken()->getUser();


        //entity manager
        $em=$this->getDoctrine()->getManager();

        //DELETE OBJECT FROM ORM  NB: REMOVE TE5ETH OBJECT NOT ID
        if ($this->getDoctrine()->getRepository(Application::class)->hasApplied($idOpportunity,$connectedUser->getId())==null)
        {$app->setState("APPLIED");
        $app->setIdOpportunity($this->getDoctrine()->getRepository(Opportunity::class)->find($idOpportunity));

        $app->setIdFreelancer($connectedUser);
        $em->persist($app);
        $em->flush();

        }


        return $this->redirectToRoute('application_homepage');

    }






    /**
     * Creates a new ActionItem entity.
     *
     * @Route("/search", name="ajax_search")
     * @Method("GET")
     */
    public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities =  $em->getRepository('Application::class')->findEntitiesByString($requestString);
        if(!$entities) {
            $result['entities']['error'] = "No entries found";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }
        return new Response(json_encode($result));
    }

    public function getRealEntities($entities){
        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = $entity->getFoo();
        }
        return $realEntities;
    }



}
