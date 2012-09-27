<?php

namespace Helmelar\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HelmelarUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
