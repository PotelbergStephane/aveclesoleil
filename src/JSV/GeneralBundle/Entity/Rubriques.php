<?php

namespace JSV\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rubriques
 *
 * @ORM\Table(name="rubriques", uniqueConstraints={@ORM\UniqueConstraint(name="slugFR_UNIQUE", columns={"slugFR"}), @ORM\UniqueConstraint(name="slugEN_UNIQUE", columns={"slugEN"})}, indexes={@ORM\Index(name="fk_pages_sites1_idx", columns={"site"})})
 * @ORM\Entity
 */
class Rubriques
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomFR", type="string", length=50, nullable=false)
     */
    private $nomfr;

    /**
     * @var string
     *
     * @ORM\Column(name="slugFR", type="string", length=60, nullable=false)
     */
    private $slugfr;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEN", type="string", length=50, nullable=true)
     */
    private $nomen;

    /**
     * @var string
     *
     * @ORM\Column(name="slugEN", type="string", length=60, nullable=true)
     */
    private $slugen;

    /**
     * @var \Sites
     *
     * @ORM\ManyToOne(targetEntity="JSV\MultiSiteBundle\Entity\Sites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site", referencedColumnName="id")
     * })
     */
    private $site;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Articles", mappedBy="rubrique")
     * @ORM\JoinTable(name="blogs")
     */
    private $article;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->article = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomfr
     *
     * @param string $nomfr
     * @return Rubriques
     */
    public function setNomfr($nomfr)
    {
        $this->nomfr = $nomfr;

        return $this;
    }

    /**
     * Get nomfr
     *
     * @return string 
     */
    public function getNomfr()
    {
        return $this->nomfr;
    }

    /**
     * Set slugfr
     *
     * @param string $slugfr
     * @return Rubriques
     */
    public function setSlugfr($slugfr)
    {
        $this->slugfr = $slugfr;

        return $this;
    }

    /**
     * Get slugfr
     *
     * @return string 
     */
    public function getSlugfr()
    {
        return $this->slugfr;
    }

    /**
     * Set nomen
     *
     * @param string $nomen
     * @return Rubriques
     */
    public function setNomen($nomen)
    {
        $this->nomen = $nomen;

        return $this;
    }

    /**
     * Get nomen
     *
     * @return string 
     */
    public function getNomen()
    {
        return $this->nomen;
    }

    /**
     * Set slugen
     *
     * @param string $slugen
     * @return Rubriques
     */
    public function setSlugen($slugen)
    {
        $this->slugen = $slugen;

        return $this;
    }

    /**
     * Get slugen
     *
     * @return string 
     */
    public function getSlugen()
    {
        return $this->slugen;
    }

    /**
     * Set site
     *
     * @param \JSV\GeneralBundle\Entity\Sites $site
     * @return Rubriques
     */
    public function setSite(\JSV\GeneralBundle\Entity\Sites $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \JSV\GeneralBundle\Entity\Sites 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Add article
     *
     * @param \JSV\GeneralBundle\Entity\Articles $article
     * @return Rubriques
     */
    public function addArticle(\JSV\GeneralBundle\Entity\Articles $article)
    {
        $this->article[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \JSV\GeneralBundle\Entity\Articles $article
     */
    public function removeArticle(\JSV\GeneralBundle\Entity\Articles $article)
    {
        $this->article->removeElement($article);
    }

    /**
     * Get article
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticle()
    {
        return $this->article;
    }
}
