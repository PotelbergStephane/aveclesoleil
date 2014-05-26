<?php

namespace JSV\FormationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formations
 *
 * @ORM\Table(name="formations", uniqueConstraints={@ORM\UniqueConstraint(name="slugFR_UNIQUE", columns={"slugFR"}), @ORM\UniqueConstraint(name="reference_UNIQUE", columns={"reference"}), @ORM\UniqueConstraint(name="slugEN_UNIQUE", columns={"slugEN"})}, indexes={@ORM\Index(name="fk_formations_sites1_idx", columns={"site"})})
 * @ORM\Entity
 */
class Formations
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
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="datetime", nullable=true)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="datetime", nullable=true)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionFR", type="text", nullable=false)
     */
    private $descriptionfr;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionEN", type="text", nullable=true)
     */
    private $descriptionen;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=100, nullable=false)
     */
    private $reference;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreParticipantsMaximum", type="integer", nullable=false)
     */
    private $nombreparticipantsmaximum;

    /**
     * @var \Sites
     *
     * @ORM\ManyToOne(targetEntity="\JSV\MultiSiteBundle\Entity\Sites")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site", referencedColumnName="id")
     * })
     */
    private $site;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="\JSV\MembresBundle\Entity\Membres", mappedBy="formation")
     */
    private $membre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->membre = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Formations
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
     * @return Formations
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
     * @return Formations
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
     * @return Formations
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
     * Set prix
     *
     * @param string $prix
     * @return Formations
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
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Formations
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Formations
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set descriptionfr
     *
     * @param string $descriptionfr
     * @return Formations
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
     * Set descriptionen
     *
     * @param string $descriptionen
     * @return Formations
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

    /**
     * Set reference
     *
     * @param string $reference
     * @return Formations
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
     * Set nombreparticipantsmaximum
     *
     * @param integer $nombreparticipantsmaximum
     * @return Formations
     */
    public function setNombreparticipantsmaximum($nombreparticipantsmaximum)
    {
        $this->nombreparticipantsmaximum = $nombreparticipantsmaximum;

        return $this;
    }

    /**
     * Get nombreparticipantsmaximum
     *
     * @return integer 
     */
    public function getNombreparticipantsmaximum()
    {
        return $this->nombreparticipantsmaximum;
    }

    /**
     * Set site
     *
     * @param \JSV\MultiSiteBundle\Entity\Sites $site
     * @return Formations
     */
    public function setSite(\JSV\MultiSiteBundle\Entity\Sites $site = null)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return \JSV\MultiSiteBundle\Entity\Sites 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Add membre
     *
     * @param \JSV\MembresBundle\Entity\Membres $membre
     * @return Formations
     */
    public function addMembre(\JSV\MembresBundle\Entity\Membres $membre)
    {
        $this->membre[] = $membre;

        return $this;
    }

    /**
     * Remove membre
     *
     * @param \JSV\MembresBundle\Entity\Membres $membre
     */
    public function removeMembre(\JSV\MembresBundle\Entity\Membres $membre)
    {
        $this->membre->removeElement($membre);
    }

    /**
     * Get membre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMembre()
    {
        return $this->membre;
    }
}
