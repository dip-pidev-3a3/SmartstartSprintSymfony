<?php

namespace FeedbackBundle\Controller;
use AppBundle\Entity\Application;
use AppBundle\Entity\Feedback;
use AppBundle\Entity\Stat;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\FosUser;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $user=$this->container->get('security.token_storage')->getToken()->getUser();
        $rating = $request->request->get('rating');
        $comment = $request->request->get('comment');
        $em=$this->getDoctrine()->getManager();
        $msg="";

        $application = $em->getRepository(Application::class)->find(1);

        $f=$this->getDoctrine()
            ->getRepository(Feedback::class)
            ->GetFeedback($user->getId(),$application->getIdApplication());
        if($rating && $comment){


            if ($f == null)
            {
                $feedBack = new Feedback();
                $feedBack->setAddedDate(new \DateTime());
                $feedBack->setIdApplication($application);
                $feedBack->setIdUser($this->getUser());
                $feedBack->setRating($rating);
                $feedBack->setComment($comment);
                $em->persist($feedBack);
                $em->flush();

                $msg="";
                return $this->render('@Feedback/Default/index.html.twig',array('msg'=>$msg));
            }}
        else
        {

            return $this->render('@Feedback/Default/index.html.twig',array('msg'=>$f));
        }


        return $this->render('@Feedback/Default/index.html.twig',array('msg'=>$msg));
    }
    public function afficheAction(Request $request)
    {
        $user=new FosUser();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $feedback = $this->getDoctrine()->getRepository(Feedback::class)->findBy(array('idUser' => $user->getId()));


        $db = $this->getDoctrine()->getManager();
        $payment = $db->getRepository(Feedback::class)->findByPage(
            $request->query->getInt('page', 1),
            4,$user->getId());
        return $this->render('@Feedback/Default/affiche.html.twig',array('con'=>$payment));

    }

    public function removeAction($id)
    {
        $feedback = $this->getDoctrine()->getRepository(Feedback::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($feedback);
        $em->flush();
        return $this->redirectToRoute('affiche_homepage');


    }

    public function DashboardAction()
    {
        $totalRate= array();
        $freelancerss= array();
        $freelancers = $this->getDoctrine()->getRepository(Stat::class)->getRateByUser();

        for($i = 0; $i <count($freelancers); ++$i)
        {
            // var_dump($freelancers[$i][2]);
            array_push( $totalRate ,intval($freelancers[$i][2]));
            // var_dump($totalRate);

            $fetchedUser=$this->getDoctrine()->getRepository(FosUser::class)->find($freelancers[$i][1]);

            array_push( $freelancerss , $fetchedUser->getName());
        }


        $sellsHistory = array(
            array(
                "name" => "Total of ratings",
                "data" => $totalRate
            ),


        );
        // var_dump($sellsHistory);
        $ob = new Highchart();
        $ob->chart->type('bar');
        $ob->chart->renderTo('linechart');
        // ID de l'élement de DOM que vous utilisez comme conteneur

        $ob->title->text('Rate by freelancer');

        $ob->yAxis->title(array('text' => "Rates"));

        $ob->xAxis->title(array('text'  => "Freelancers"));
        $ob->xAxis->categories($freelancerss);

        $ob->series($sellsHistory);



        return $this->render('FeedbackBundle:Default:stat.html.twig', array(
            'linechart' => $ob
        ));


    }




}
