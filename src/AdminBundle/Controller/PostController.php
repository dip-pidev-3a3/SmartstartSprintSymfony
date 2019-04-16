<?php

namespace AdminBundle\Controller;

use AppBundle\Entity\Blogposts;
use BlogBundle\Form\ApplicationType;
use BlogBundle\Repository\BlogPostsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    public function ListpostsAction(Request $request)
    {$Blogposts=new Blogposts();
        $D=new \DateTime();
        //form
        $form=$this->createForm(ApplicationType::class,$Blogposts);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {
            $file=$Blogposts->getImage();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'),$fileName);
            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em->persist($Blogposts);

            $Blogposts->setAuthor($user);
            $Blogposts->setPostDate($D);
            $Blogposts->setImage($fileName);
            $Blogposts->setPostLikesCount(0);
            $em->flush();
            return $this->redirect($request->getUri());

        }
        //envoi form

        $db = $this->getDoctrine()->getManager();

        $listUser = $db->getRepository('AppBundle:Blogposts')->findByPage(
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('@Admin/AdminBlogViews/ListPosts.html.twig', array('v' => $listUser,'form'=>$form->createView()));


    }
    public function DeleteAction($postId)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository(Blogposts::class)->find($postId);
        $em->remove($modele);
        $em->flush();
        return $this->redirectToRoute('admin_listPosts');


    }
    public function updateAction($postId,Request $request)
    {
        $Blogposts=$this->getDoctrine()->getRepository(Blogposts::class)->find($postId);
        //form
        $B=new Blogposts();
        $D=new \DateTime();
        $Blogposts->setImage(null);
        $form=$this->createForm(ApplicationType::class,$Blogposts);
        $form=$form->handleRequest($request);
        if($form->isValid())
        {
            $file=$Blogposts->getImage();
            $fileName=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'),$fileName);
            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em->persist($Blogposts);

            $Blogposts->setAuthor($user);
            $Blogposts->setPostDate($D);
            $Blogposts->setImage($fileName);
            $em->flush();
            return $this->redirectToRoute('admin_listPosts');

        }

        return $this->render('@Admin/AdminBlogViews/UpdatePost.html.twig',array('form'=>$form->createView()));

    }
    public function DetailPostAction($postId)
    {
        $Blogpost=$this->getDoctrine()->getRepository(BlogPosts::class)->find($postId);
        return $this->render('@Admin/AdminBlogViews/Detailpost.html.twig',array('v'=>$Blogpost));

    }
}
