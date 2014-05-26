<?php

namespace JSV\MultiSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JSVMultiSiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
