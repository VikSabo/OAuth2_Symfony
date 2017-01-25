<?php

namespace Example\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExampleApiBundle:Default:index.html.twig');
    }
}
