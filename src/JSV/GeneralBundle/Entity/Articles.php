<?php

namespace JSV\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", uniqueConstraints={@ORM\UniqueConstraint(name="slugFR_UNIQUE", columns={"slugFR"}), @ORM\UniqueConstraint(name="slugEN_UNIQUE", columns={"slugEN"})})
 * @ORM\Entity
 */
class Articles
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
     * @ORM\Column(name="nomFR", type="string", length=100, nullable=false)
     */
    private $nomfr;

    /**
     * @var string
     *
     * @ORM\Column(name="slugFR", type="string", length=120, nullable=false)
     */
    private $slugfr;

    /**
     * @var string
     *
     * @ORM\Column(name="texteFR", type="text", nullable=true)
     */
    private $textefr;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="string", length=100, nullable=true)
     */
    private $media;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEN", type="string", length=100, nullable=true)
     */
    private $nomen;

    /**
     * @var string
     *
     * @ORM\Column(name="slugEN", type="string", length=120, nullable=true)
     */
    private $slugen;

    /**
     * @var string
     *
     * @ORM\Column(name="texteEN", type="text", nullable=true)
     */
    private $texteen;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveau", type="integer", nullable=false)
     */
    private $niveau;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Rubriques", inversedBy="article")
     */
    private $rubrique;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rubrique = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Articles
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
     * @return Articles
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
     * Set textefr
     *
     * @param string $textefr
     * @return Articles
     */
    public function setTextefr($textefr)
    {
        $this->textefr = $textefr;

        return $this;
    }

    /**
     * Get textefr
     *
     * @return string 
     */
    public function getTextefr()
    {
        return $this->textefr;
    }

    /**
     * Set media
     *
     * @param string $media
     * @return Articles
     */
    public function setMedia($media)
    {
        $this->media = $media;

        return $this;
    }

    /**
     * Get media
     *
     * @return string 
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set nomen
     *
     * @param string $nomen
     * @return Articles
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
     * @return Articles
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
     * Set texteen
     *
     * @param string $texteen
     * @return Articles
     */
    public function setTexteen($texteen)
    {
        $this->texteen = $texteen;

        return $this;
    }

    /**
     * Get texteen
     *
     * @return string 
     */
    public function getTexteen()
    {
        return $this->texteen;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     * @return Articles
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return integer 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Add rubrique
     *
     * @param \JSV\GeneralBundle\Entity\Rubriques $rubrique
     * @return Articles
     */
    public function addRubrique(\JSV\GeneralBundle\Entity\Rubriques $rubrique)
    {
        $this->rubrique[] = $rubrique;

        return $this;
    }

    /**
     * Remove rubrique
     *
     * @param \JSV\GeneralBundle\Entity\Rubriques $rubrique
     */
    public function removeRubrique(\JSV\GeneralBundle\Entity\Rubriques $rubrique)
    {
        $this->rubrique->removeElement($rubrique);
    }

    /**
     * Get rubrique
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRubrique()
    {
        return $this->rubrique;
    }
}
