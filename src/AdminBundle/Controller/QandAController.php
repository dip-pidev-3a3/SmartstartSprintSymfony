<?php

namespace AdminBundle\Controller;

use AppBundle\Entity\QClouds;
use AppBundle\Entity\QQuestions;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class QandAController extends Controller
{
    public function indexAction(Request $request){

        $listQuestions=$this->getDoctrine()->getManager()->getRepository(QQuestions::class)
            ->getSignaled( $request->query->getInt('page', 1), 10);
        return $this->render('@Admin/AdminBlogViews/qanda.html.twig', array('questions' => $listQuestions));

    }

    public function deleteAction(Request $request,$idq){
        $em=$this->getDoctrine()->getManager();
        $question=$em->getRepository(QQuestions::class)->find($idq);
        if($question->getIdc()!= null){
            $cloud= $em->getRepository(QClouds::class)->find($question->getIdc());
            $em->remove($cloud);
        }
        $em->remove($question);
        $em->flush();
        return $this->redirectToRoute('qanda_Redirection');
    }



    public function statsAction(){
        $pieChart = new PieChart();

        $em= $this->getDoctrine();
        $quests = $em->getRepository(QQuestions::class)->findAll();
        $totalReplies=0;

        foreach($quests as $q) {
            $totalReplies=$totalReplies+$q->getReplies();
        }
        $data= array();
        $stat=['questions', 'Nbr Replies'];
        $nb=0;
        array_push($data,$stat);
        foreach($quests as $q) {
            $stat=array();
            array_push($stat,$q->getQuestion(),(($q->getReplies()) *100)/$totalReplies);
            $nb=($q->getReplies() *100)/$totalReplies;
            $stat=[$q->getQuestion(),$nb];
            array_push($data,$stat);
        }
        $pieChart->getData()->setArrayToDataTable($data);

        $pieChart->getOptions()->setTitle('Pourcentages des questions ');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

return $this->render('@Admin/AdminBlogViews/qstats.html.twig', array('piechart' => $pieChart));


    }

}
