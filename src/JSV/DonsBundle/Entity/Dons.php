<?php

namespace JSV\DonsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dons
 *
 * @ORM\Table(name="dons", indexes={@ORM\Index(name="fk_dons_membres1_idx", columns={"membre"})})
 * @ORM\Entity
 */
class Dons
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
     * @ORM\Column(name="montant", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="donRealise", type="integer", nullable=false)
     */
    private $donrealise;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="donDate", type="datetime", nullable=true)
     */
    private $dondate;

    /**
     * @var integer
     *
     * @ORM\Column(name="donMode", type="integer", nullable=true)
     */
    private $donmode;

    /**
     * @var \Membres
     *
     * @ORM\ManyToOne(targetEntity="\JSV\MembresBundle\Entity\Membres")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="membre", referencedColumnName="id")
     * })
     */
    private $membre;



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
     * Set montant
     *
     * @param string $montant
     * @return Dons
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set donrealise
     *
     * @param integer $donrealise
     * @return Dons
     */
    public function setDonrealise($donrealise)
    {
        $this->donrealise = $donrealise;

        return $this;
    }

    /**
     * Get donrealise
     *
     * @return integer 
     */
    public function getDonrealise()
    {
        return $this->donrealise;
    }

    /**
     * Set dondate
     *
     * @param \DateTime $dondate
     * @return Dons
     */
    public function setDondate($dondate)
    {
        $this->dondate = $dondate;

        return $this;
    }

    /**
     * Get dondate
     *
     * @return \DateTime 
     */
    public function getDondate()
    {
        return $this->dondate;
    }

    /**
     * Set donmode
     *
     * @param integer $donmode
     * @return Dons
     */
    public function setDonmode($donmode)
    {
        $this->donmode = $donmode;

        return $this;
    }

    /**
     * Get donmode
     *
     * @return integer 
     */
    public function getDonmode()
    {
        return $this->donmode;
    }

    /**
     * Set membre
     *
     * @param \JSV\MembresBundle\Entity\Membres $membre
     * @return Dons
     */
    public function setMembre(\JSV\MembresBundle\Entity\Membres $membre = null)
    {
        $this->membre = $membre;

        return $this;
    }

    /**
     * Get membre
     *
     * @return \JSV\MembresBundle\Entity\Membres 
     */
    public function getMembre()
    {
        return $this->membre;
    }
}
