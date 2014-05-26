<?php

namespace JSV\ProduitsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JSVProduitsBundle:Default:index.html.twig', array('name' => $name));
    }
}
