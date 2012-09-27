<?php

namespace Helmelar\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HelmelarGameBundle:Default:index.html.twig', array('name' => $name));
    }
}
