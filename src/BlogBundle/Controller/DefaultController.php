<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Blog/BlogViews/Blog.html.twig');
    }
    public function detailAction()
    {

        return $this->render('@Blog/BlogViews/DetailBlog.html.twig');


    }
}
