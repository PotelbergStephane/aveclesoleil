<?php

namespace JSV\ProduitsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produits
 *
 * @ORM\Table(name="produits", uniqueConstraints={@ORM\UniqueConstraint(name="slugFR_UNIQUE", columns={"slugFR"}), @ORM\UniqueConstraint(name="reference_UNIQUE", columns={"reference"}), @ORM\UniqueConstraint(name="slugEN_UNIQUE", columns={"slugEN"})})
 * @ORM\Entity
 */
class Produits
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
     * @var integer
     *
     * @ORM\Column(name="disponibilite", type="integer", nullable=false)
     */
    private $disponibilite;

    /**
     * @var string
     *
     * @ORM\Column(name="media", type="string", length=100, nullable=true)
     */
    private $media;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=100, nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionFR", type="text", nullable=true)
     */
    private $descriptionfr;

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
     * @ORM\Column(name="descriptionEN", type="text", nullable=true)
     */
    private $descriptionen;



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
     * @return Produits
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
     * @return Produits
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
     * Set disponibilite
     *
     * @param integer $disponibilite
     * @return Produits
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite
     *
     * @return integer 
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set media
     *
     * @param string $media
     * @return Produits
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
     * Set prix
     *
     * @param string $prix
     * @return Produits
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Produits
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set descriptionfr
     *
     * @param string $descriptionfr
     * @return Produits
     */
    public function setDescriptionfr($descriptionfr)
    {
        $this->descriptionfr = $descriptionfr;

        return $this;
    }

    /**
     * Get descriptionfr
     *
     * @return string 
     */
    public function getDescriptionfr()
    {
        return $this->descriptionfr;
    }

    /**
     * Set nomen
     *
     * @param string $nomen
     * @return Produits
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
     * @return Produits
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
     * Set descriptionen
     *
     * @param string $descriptionen
     * @return Produits
     */
    public function setDescriptionen($descriptionen)
    {
        $this->descriptionen = $descriptionen;

        return $this;
    }

    /**
     * Get descriptionen
     *
     * @return string 
     */
    public function getDescriptionen()
    {
        return $this->descriptionen;
    }
}
