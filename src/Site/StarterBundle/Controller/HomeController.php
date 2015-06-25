<?php

namespace Site\StarterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteStarterBundle:Home:index.html.twig');
    }
}