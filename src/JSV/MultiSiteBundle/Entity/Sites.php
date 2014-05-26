<?php

namespace JSV\MultiSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sites
 *
 * @ORM\Table(name="sites", uniqueConstraints={@ORM\UniqueConstraint(name="nom_UNIQUE", columns={"nom"})})
 * @ORM\Entity
 */
class Sites
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
     * @ORM\Column(name="nom", type="string", length=40, nullable=false)
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="JSV\GeneralBundle\Entity\Parametres", inversedBy="site")
     * @ORM\JoinTable(name="configurations",
     *   joinColumns={
     *     @ORM\JoinColumn(name="site", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="parametre", referencedColumnName="id")
     *   }
     * )
     */
    private $parametre;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parametre = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom
     *
     * @param string $nom
     * @return Sites
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Add parametre
     *
     * @param \JSV\GeneralBundle\Entity\Parametres $parametre
     * @return Sites
     */
    public function addParametre(\JSV\GeneralBundle\Entity\Parametres $parametre)
    {
        $this->parametre[] = $parametre;

        return $this;
    }

    /**
     * Remove parametre
     *
     * @param \JSV\GeneralBundle\Entity\Parametres $parametre
     */
    public function removeParametre(\JSV\GeneralBundle\Entity\Parametres $parametre)
    {
        $this->parametre->removeElement($parametre);
    }

    /**
     * Get parametre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParametre()
    {
        return $this->parametre;
    }
}
