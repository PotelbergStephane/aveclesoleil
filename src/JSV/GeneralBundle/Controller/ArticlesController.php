<?php

namespace JSV\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticlesController extends Controller
{
    public function listBySiteAction($site,$rub){
        $rubriques = $this->getDoctrine()->getManager()->getRepository('JSVGeneralBundle:rubriques')->findOneBySlugfr($rub)->getId();
        $articles = $this->getDoctrine()->getManager()->getRepository('JSVGeneralBundle:articles')->findByRubrique('1');
        return $this->render('JSVGeneralBundle:Articles:listBySite.html.twig', array('articles'=>$articles));
        
    }
}
