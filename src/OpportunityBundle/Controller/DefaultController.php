<?php

namespace OpportunityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Opportunity/Default/index.html.twig');
    }
    public function detailAction()
    {
        return $this->render('@Opportunity/Default/detailblog.html.twig');
    }
}
