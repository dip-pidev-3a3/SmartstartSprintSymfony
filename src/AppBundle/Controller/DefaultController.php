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

    /**
     * @Route("/Verify", name="Verify")
     */

    public function redirectAction()
    {

        $authChecker = $this->container->get('security.authorization_checker');
        if ($authChecker->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            if ($authChecker->isGranted('ROLE_ADMIN'))
                return $this->render('@Admin/Default/index.html.twig');
            else if ($authChecker->isGranted('ROLE_USER'))
                return $this->redirectToRoute('homepage');
        }
    }
}
