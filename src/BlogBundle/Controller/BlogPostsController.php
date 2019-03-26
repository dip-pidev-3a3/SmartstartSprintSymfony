<?php

namespace BlogBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Comments;
use AppBundle\Entity\FosUser;
use AppBundle\Entity\PostLike;
use BlogBundle\Form\BlogpostsType;
use BlogBundle\Form\CommentsType;
use BlogBundle\Form\AdvertType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Entity\Blogposts;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Repository\BlogPostsRepository;
use Symfony\Component\Form\AbstractType;


class BlogPostsController extends Controller
{
    public function AddBlogPostAction(Request $request)
    {//creer un objet vide
        $Blogposts=new Blogposts();
        $D=new \DateTime();
        $manager = $this->get('mgilet.notification');
        //form
        $form=$this->createForm(BlogpostsType::class,$Blogposts);
        $form=$form->handleRequest($request);
        if($form->isValid())
        { $notif=$manager->createNotification('Blog Added', 'Some random text', 'https://google.fr/');
            $manager->addNotification(array($this->getUser()), $notif, true);
            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $em->persist($Blogposts);

            $Blogposts->setAuthor($user);
            $Blogposts->setPostDate($D);
            $em->flush();
            return $this->redirectToRoute('blog_homepage');

        }
        //envoi form
        return $this->render('@Blog/BlogViews/AddBlogPost.html.twig',array('form'=>$form->createView()));



    }
    public function listAction(Request $request)
    {$Blogposts=new Blogposts();
        $D=new \DateTime();
        //form
        $form=$this->createForm(BlogpostsType::class,$Blogposts);
        $form=$form->handleRequest($request);
        $popular=$this->getDoctrine()->getRepository(Blogposts::class)->findMostPopularPosts(10);
        $author=$this->getDoctrine()->getRepository(Blogposts::class)->findmostpopularAuthor();
        if($form->isValid())
        { $manager = $this->get('mgilet.notification');
            $notif = $manager->createNotification('Hello world !');
            $notif->setMessage('This a notification.');
            $notif->setLink('http://symfony.com/');
            // or the one-line method :
            // $manager->createNotification('Notification subject','Some random text','http://google.fr');

            // you can add a notification to a list of entities
            // the third parameter ``$flush`` allows you to directly flush the entities
            $manager->addNotification(array($this->getUser()), $notif, true);
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

        return $this->render('@Blog/BlogViews/Blog.html.twig', array('v' => $listUser,'form'=>$form->createView(),'popular'=>$popular));




    }
    public function DeleteAction($postId)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository(Blogposts::class)->find($postId);
        $em->remove($modele);
        $em->flush();
        return $this->redirectToRoute('blog_ListPosts');


    }
    public function DetailPostAction($postId,Request $request)
    { $db = $this->getDoctrine()->getManager();
        $popular=$this->getDoctrine()->getRepository(Blogposts::class)->findMostPopularPosts(10);
    $b=new Blogposts();
    $b->setPostId($postId);

        $listUser = $db->getRepository('AppBundle:Blogposts')->find($postId);
        $listcom=$db->getRepository('AppBundle:Comments')->findBy(['commentPostId' => $postId]);

        $Comment=new Comments();
        $D=new \DateTime();
        //form
        $form=$this->createForm(CommentsType::class,$Comment);
        $form=$form->handleRequest($request);
        if($form->isSubmitted())
        {
            $em=$this->getDoctrine()->getManager();
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $Comment->setCommentAuthor($user);
            $Comment->setCommentDate($D);
            $Comment->setCommentPostId($b);
            $em->getRepository('AppBundle:Blogposts')-> ComsCountAdd($postId);

            $em->merge($Comment);


            $em->flush();
            return $this->redirect($request->getUri());


        }
        //envoi form
        return $this->render('@Blog/BlogViews/DetailBlog.html.twig',array('form'=>$form->createView(),'v' => $listUser,'com'=>$listcom,'popular'=>$popular));
    }

        public function updateAction($postId,Request $request)
    {
        $Blogposts=$this->getDoctrine()->getRepository(Blogposts::class)->find($postId);
        //form
        $B=new Blogposts();
        $D=new \DateTime();
        $Blogposts->setImage(null);
        $form=$this->createForm(BlogpostsType::class,$Blogposts);
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
            return $this->redirectToRoute('blog_ListPosts');

        }

        return $this->render('@Blog/BlogViews/UpdateBlogPost.html.twig',array('form'=>$form->createView()));

    }
    public function LikeAction($id,Request $request,$postId)

    {

        $like1=new PostLike();
        $user=new FosUser();
        $em=$this->getDoctrine()->getManager();


        $like=$this->getDoctrine()->getRepository(PostLike::class)->findOneBy(['post' => $postId,'author'=>$id]);

        if($like==null)
        {
            $em->getRepository('AppBundle:Blogposts')-> LikeCountAdd($postId);

            $Blogposts=$this->getDoctrine()->getRepository(Blogposts::class)->find($postId);
            $user = $this->container->get('security.token_storage')->getToken()->getUser();

            $like1->setAuthor($user);

            $like1->setPost($Blogposts);


            $em->persist($like1);
            $em->flush();



        }
        elseif($like!=null)
        {

            $em->remove($like);
            $em->getRepository('AppBundle:Blogposts')-> LikeCountReduce($postId);
            $em->flush();




        }
        $Blogposts=$this->getDoctrine()->getRepository(Blogposts::class)->find($postId);

        return $this->json([
            'code'=>200,
            'message'=>'supp',
            'likes'=>$Blogposts->getPostLikesCount()
        ],200);



    }
    /*public function searchAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $requestString = $request->get('q');
        $entities =  $em->getRepository('AppBundle:Blogposts')->findEntitiesByString($requestString);
        if(!$entities) {
            $result['entities']['error'] = "rien trouvé";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }
        return new Response(json_encode($result));
    }
    public function getRealEntities(Blogposts $entities){

        foreach ($entities as $entity){
            $realEntities[$entities->getPostId()] = $entity->getFoo();
        }
        return $realEntities;
    }*/
    public function PostsByCatAction($cat,Request $request)
    {
        $Blogposts=new Blogposts();
        $D=new \DateTime();
        //form
        $form=$this->createForm(BlogpostsType::class,$Blogposts);
        $form=$form->handleRequest($request);
        $post=$this->getDoctrine()->getRepository(Blogposts::class)->findBy(array('postType'=>$cat));
        $popular=$this->getDoctrine()->getRepository(Blogposts::class)->findMostPopularByCat($cat);
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
        $db = $this->getDoctrine()->getManager();

        $listUser = $db->getRepository('AppBundle:Blogposts')->findByCat(
            $request->query->getInt('page', 1),
            5,$cat
        );
        return $this->render('@Blog/BlogViews/PostsByCat.html.twig',array('v'=>$listUser,'popular'=>$popular,'form'=>$form->createView()));
    }
    public function ManagerAction(Request $request)
    { $user=new FosUser();

        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $em=$this->getDoctrine()->getRepository(Blogposts::class);
        $news=$em->CountPostsByCat("NewsjackingPost",$user->getId());
        $media=$em->CountPostsByCat("MediaPost",$user->getId());
        $en=$em->CountPostsByCat("Entertaining",$user->getId());
        $In=$em->CountPostsByCat("InstructionalPost",$user->getId());
        $ch=$em->CountPostsByCat("CheatSheetPost",$user->getId());
        $per=$em->CountPostsByCat("PersonalSpotlightPost",$user->getId());
        $likes=$em->CountAllLikes($user->getId());
        $comments=$em->CountAllComs($user->getId());
        $first=$em->FirstPost($user->getId());
        $last=$em->LastPost($user->getId());

        $popular=$this->getDoctrine()->getRepository(Blogposts::class)->findMostPopularPostsByUser(3,$user->getId());
        $posts=$em->findByAuthor(
            $request->query->getInt('page', 1),
            7,$user->getId()
        );
        return $this->render('@Blog/BlogViews/BlogManagment.html.twig',array('pop'=>$popular,'v'=>$posts,'n'=>$news,'m'=>$media
        ,'e'=>$en,'i'=>$In,'c'=>$ch,'p'=>$per,'l'=>$likes,'com'=>$comments,'first'=>$first,'last'=>$last));
    }
    public function sendNotification(Request $request)
    {
        $manager = $this->get('mgilet.notification');
        $notif = $manager->createNotification('Hello world!');
        $notif->setMessage('This a notification.');
        $notif->setLink('https://symfony.com/');
        // or the one-line method :
        // $manager->createNotification('Notification subject', 'Some random text', 'https://google.fr/');

        // you can add a notification to a list of entities
        // the third parameter `$flush` allows you to directly flush the entities
        $manager->addNotification(array($this->getUser()), $notif, true);

        
    }
    public function Suggest()
    {

    }


}
