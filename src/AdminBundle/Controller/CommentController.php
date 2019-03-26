<?php

namespace AdminBundle\Controller;

use AppBundle\Entity\Comments;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends Controller
{
    public function ListCommentsAction(Request $request)
    {


        $db = $this->getDoctrine()->getManager();

        $listUser = $db->getRepository('AppBundle:Comments')->findByPageComments(
            $request->query->getInt('page', 1),
            5
        );

        return $this->render('@Admin/AdminBlogViews/ListComments.html.twig', array('comments' => $listUser));


    }
    public function DeleteAction($commentId)
    {
        $em=$this->getDoctrine()->getManager();
        $modele=$em->getRepository(Comments::class)->find($commentId);
        $em->remove($modele);
        $em->flush();
        return $this->redirectToRoute('admin_listComments');


    }
}
