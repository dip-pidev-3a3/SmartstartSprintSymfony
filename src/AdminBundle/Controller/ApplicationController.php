<?php

namespace AdminBundle\Controller;

use AppBundle\Entity\Application;
use AppBundle\Entity\Blogposts;
use BlogBundle\Form\ApplicationType;
use BlogBundle\Repository\BlogPostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ApplicationController extends Controller
{
    public function listAppsAction(Request $request)
    {$Apps=new Application();

        //form
        $form=$this->createForm(ApplicationType::class,$Apps);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {

            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em->persist($Apps);

            $Apps->setIdFreelancer($user);

            $em->flush();
            return $this->redirect($request->getUri());

        }
        //envoi form

        $db = $this->getDoctrine()->getManager();

        $listUser = $db->getRepository('AppBundle:Application')->findByPage(
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('@Admin/Default/listApps.html.twig', array('v' => $listUser,'form'=>$form->createView()));


    }
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        //reçu de l'objet avec l'id
        $app=$this->getDoctrine()->getRepository(Application::class)->find($id);
        //DELETE OBJECT FROM ORM  NB: REMOVE TE5ETH OBJECT NOT ID
        $em->remove($app);
        //delete from the DB
        $em->flush();
        return $this->redirectToRoute('admin_apps');


    }
    public function updateAction($id,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $app=$em->getRepository(Application::class)->find($id);


        //1.b preparation du form
        $form=$this->createForm(ApplicationType::class,$app);
        //2.a recuperation form
        $form=$form->handleRequest($request);
        //2.b form validation
        if($form->isValid()){
            //3.a preparation de l'entity manager
            $em=$this->getDoctrine()->getManager();
            //3.b persist  l'object dans l'orm
            $em->persist($app);
            //3.c sauvegarde DB
            $em->flush();
            //3.d redirect
            return $this->redirectToRoute('admin_apps');

        }
        //1.c.envoi d form
        return $this->render('@Admin/Default/UpdateApp.html.twig',array('form'=>$form->createView()));


    }
    public function DetailPostAction($postId)
    {
        $Blogpost=$this->getDoctrine()->getRepository(BlogPosts::class)->find($postId);
        return $this->render('@Admin/AdminBlogViews/Detailpost.html.twig',array('v'=>$Blogpost));

    }
}
