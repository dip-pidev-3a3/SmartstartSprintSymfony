<?php

namespace AdminBundle\Controller;

use AppBundle\Entity\Blogposts;
use AppBundle\Entity\BlogProfits;
use AppBundle\Entity\FosUser;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminBlogProfitsController extends Controller
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
    public function listPaymentsAction(Request $request)
    {
        $db = $this->getDoctrine()->getManager();

        $payment = $db->getRepository('AppBundle:BlogProfits')->findByPage(
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('@Admin/AdminBlogViews/ListBlogPayment.html.twig', array('v' => $payment));

    }
    public function AcceptPaymentAction($id,$idpayment)
    { $b=new FosUser();

    $b=$this->getDoctrine()->getRepository(FosUser::class)->find($id);

        $message = \Swift_Message::newInstance()
            ->setSubject('Accepting your Payment Demand')
            ->setFrom(['smartstart1941@gmail.com'=> 'SmartStart'])
            ->setTo([$b->getEmail(), 'mounirachir96@gmail.com' => 'A name'])
            ->setBody('SmartStart team accepted your payment Demand and you will recieve your cheque as soon as possible');
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */

        $this->get('mailer')->send($message);
        $this->getDoctrine()->getRepository(BlogProfits::class)->ChangeStatus($idpayment,2);

        return $this->redirectToRoute('Admin_PaymentsBlogList');

    }

}
