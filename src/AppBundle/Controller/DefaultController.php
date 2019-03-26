<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Blogposts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $popular=$this->getDoctrine()->getRepository(Blogposts::class)->findMostPopularPosts(3);

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,'v'=>$popular
        ]);
    }
}
