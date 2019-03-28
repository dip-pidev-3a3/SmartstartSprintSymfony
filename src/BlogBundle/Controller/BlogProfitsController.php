<?php

namespace BlogBundle\Controller;

use AppBundle\Entity\Blogposts;
use AppBundle\Entity\BlogProfits;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogProfitsController extends Controller
{
    public function AddEntryAction()
    {    $em=$this->getDoctrine()->getManager();
$date=new \DateTime();
        $datefin=date_add($date, date_interval_create_from_date_string('30 days'));


        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $test=$this->getDoctrine()->getRepository(BlogProfits::class)->FindLastEntry($user->getId(),1);
        $likes=$em->getRepository(Blogposts::class)->CountAllLikes($user->getId());
        $comments=$em->getRepository(Blogposts::class)->CountAllComs($user->getId());


        if($test==null)
        {
            $NewProfit=new BlogProfits();
            $profit=new BlogProfits();

            $likes=$em->getRepository(Blogposts::class)->CountAllLikes($user->getId());
            $comments=$em->getRepository(Blogposts::class)->CountAllComs($user->getId());

            $profit->setPostLikesCount(intval(reset($likes)));
            $profit->setPostCommentCount(intval(reset($comments)));
            $profit->setAuthor($user);
            $profit->setPayment((0.01*intval(reset($likes))+(0.001*intval(reset($comments)))));

            $profit->setStartDate(new \DateTime());
            $profit->setEndDate($datefin);


            $datedebutnext=$datefin;

            $profit->setStatus(1);







            $em->persist($profit);
            $em->flush();
             $NewProfit->setStartDate($profit->getEndDate());

            $datefinNext=date_add(new \DateTime(), date_interval_create_from_date_string('60 days'));


            $NewProfit->setAuthor($user);

            $NewProfit->setEndDate($datefinNext);
            $NewProfit->setStatus(0);

            $em->persist($NewProfit);
            $em->flush();

        }
        elseif ($test=!null)
        {$ProfitNext1=new BlogProfits();
            $ProfitNextMonth=new BlogProfits();
            $test2=new BlogProfits();
            $test2=$this->getDoctrine()->getRepository(BlogProfits::class)->FindLastEntry($user->getId(),0);
            $test3=$this->getDoctrine()->getRepository(BlogProfits::class)->FindLastEntry($user->getId(),1);
            $ProfitNext1=$this->getDoctrine()->getRepository(BlogProfits::class)->find($test2[0]->getId());
            $CommentsPrevious=$this->getDoctrine()->getRepository(BlogProfits::class)->FindCountCommentsByDate();
            $LikesPrevious=$this->getDoctrine()->getRepository(BlogProfits::class)->FindCountLikesByDate();

            $ProfitNext1->setPostLikesCount(intval(reset($likes))-intval(reset($LikesPrevious)));
            $ProfitNext1->setPostCommentCount(intval(reset($comments))-intval(reset($CommentsPrevious)));
            $ProfitNext1->setStatus(1);
            $ProfitNext1->setPayment((0.01*$ProfitNext1->getPostLikesCount()+(0.001*$ProfitNext1->getPostCommentCount())));


            $em->flush();
            $ProfitNextMonth->setStartDate($test2[0]->getEndDate());

            $datefinNext=date_add(new \DateTime(), date_interval_create_from_date_string('60 days'));


            $ProfitNextMonth->setAuthor($user);

            $ProfitNextMonth->setEndDate($datefinNext);
            $ProfitNextMonth->setStatus(0);

            $em->persist($ProfitNextMonth);
            $em->flush();


        }








        return $this->redirectToRoute('blog_Managment');


    }
}
