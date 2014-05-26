<?php

namespace JSV\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blogs
 *
 * @ORM\Table(name="blogs")
 * @ORM\Entity
 */
class Blogs {
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Articles", inversedBy="rubrique")
     */
    private $article;
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Rubriques", inversedBy="article")
     */
    private $rubrique;
    
    
}
