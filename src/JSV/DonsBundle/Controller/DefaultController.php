<?php

namespace JSV\DonsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JSVDonsBundle:Default:index.html.twig', array('name' => $name));
    }
}
