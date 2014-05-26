<?php

namespace JSV\FormationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JSVFormationsBundle:Default:index.html.twig', array('name' => $name));
    }
}
