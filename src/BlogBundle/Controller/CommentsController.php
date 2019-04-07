<?php

namespace BlogBundle\Controller;

use BlogBundle\Form\CommentsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Comments;
use Symfony\Component\HttpFoundation\Request;

class CommentsController extends Controller
{
    public function AddCommentAction(Request $request)
    {//creer un objet vide
        $Comment=new Comments();
        $D=new \DateTime();
        //form
        $form=$this->createForm(CommentsType::class,$Comment);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {

            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em->persist($Comment);
            $Comment->setCommentAuthor($user);
            $Comment->setCommentDate($D);
            $Comment->setCommentApproved(0);
            $Comment->setCommentCount(0);

            $em->flush();

        }
        //envoi form
        return $this->render('@Blog/BlogViews/DetailBlog.html.twig',array('form'=>$form->createView()));



    }
    public function DeleteAction($commentId,Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=new Comments();
        $modele=$em->getRepository(Comments::class)->find($commentId);
        $em->remove($modele);
        $em->getRepository('AppBundle:Blogposts')-> ComsCountReduce($modele->getCommentPostId()->getPostId());

        $em->flush();
        echo         $modele->getCommentPostId()->getPostId();

        return $this->redirectToRoute('blog_Detail',array('postId'=>$modele->getCommentPostId()->getPostId()));


    }
}
