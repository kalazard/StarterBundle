<?php

namespace Site\StarterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteStarterBundle:Default:index.html.twig', array('name' => $name));
    }
}
