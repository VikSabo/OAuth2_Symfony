<?php

namespace Example\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExampleUserBundle:Default:index.html.twig');
    }
}
