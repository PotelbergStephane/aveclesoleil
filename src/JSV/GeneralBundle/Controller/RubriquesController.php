<?php

namespace JSV\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JSV\MultiSiteBundle\Entity\Sites;
class RubriquesController extends Controller
{
    public function menuAction($site)
    {
        $rsite=  $this->getDoctrine()->getManager()->getRepository('JSVMultiSiteBundle:Sites')->findByNom($site);
        $menu = $this->getDoctrine()->getManager()->getRepository('JSVGeneralBundle:Rubriques')->findBySite($rsite);
        return $this->render('JSVGeneralBundle:Rubriques:menu.html.twig', array('menu'=>$menu));
    }
}
