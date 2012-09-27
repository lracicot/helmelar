<?php

namespace Helmelar\PlayerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HelmelarPlayerBundle:Default:index.html.twig', array('name' => $name));
    }
}
