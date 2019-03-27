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
        $profit=new BlogProfits();
        $likes=$em->getRepository(Blogposts::class)->CountAllLikes($user->getId());
        $comments=$em->getRepository(Blogposts::class)->CountAllComs($user->getId());

        $profit->setPostLikesCount(intval(reset($likes)));
        $profit->setPostCommentCount(intval(reset($comments)));
        $profit->setAuthor($user);
        $profit->setStartDate(new \DateTime());
        $profit->setEndDate($datefin);

        $profit->setStatus(1);


        $em->persist($profit);
        $em->flush();
        return $this->redirectToRoute('blog_Managment');


    }
}
