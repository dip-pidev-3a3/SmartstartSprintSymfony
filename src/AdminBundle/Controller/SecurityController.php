<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends AbstractController
{
    public function redirectAction(){

        $authChecker = $this->container->get('security.authorization_checker');
        if ($authChecker->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            if($authChecker->isGranted('ROLE_ADMIN'))
                return $this->render('@Admin/Default/index.html.twig');
            else if ($authChecker->isGranted('ROLE_USER'))
                return $this->redirect('homepage');
        }
       // else return $this->render('default/404.html.twig');



    }
}
