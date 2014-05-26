<?php

namespace JSV\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JSVGeneralBundle:Default:index.html.twig', array('name' => $name));
    }
}
