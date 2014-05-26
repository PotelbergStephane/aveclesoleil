<?php

namespace JSV\ProduitsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achats
 *
 * @ORM\Table(name="achats", indexes={@ORM\Index(name="fk_achats_membres1_idx", columns={"membre"})})
 * @ORM\Entity
 */
class Achats
{
    /**
     * @var integer
     *
     * @ORM\Column(name="payementRealise", type="integer", nullable=false)
     */
    private $payementrealise;

    /**
     * @var integer
     *
     * @ORM\Column(name="payementMode", type="integer", nullable=true)
     */
    private $payementmode;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payementDate", type="datetime", nullable=true)
     */
    private $payementdate;

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
     * @var \Produits
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Produits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="produit", referencedColumnName="id")
     * })
     */
    private $produit;



    /**
     * Set payementrealise
     *
     * @param integer $payementrealise
     * @return Achats
     */
    public function setPayementrealise($payementrealise)
    {
        $this->payementrealise = $payementrealise;

        return $this;
    }

    /**
     * Get payementrealise
     *
     * @return integer 
     */
    public function getPayementrealise()
    {
        return $this->payementrealise;
    }

    /**
     * Set payementmode
     *
     * @param integer $payementmode
     * @return Achats
     */
    public function setPayementmode($payementmode)
    {
        $this->payementmode = $payementmode;

        return $this;
    }

    /**
     * Get payementmode
     *
     * @return integer 
     */
    public function getPayementmode()
    {
        return $this->payementmode;
    }

    /**
     * Set payementdate
     *
     * @param \DateTime $payementdate
     * @return Achats
     */
    public function setPayementdate($payementdate)
    {
        $this->payementdate = $payementdate;

        return $this;
    }

    /**
     * Get payementdate
     *
     * @return \DateTime 
     */
    public function getPayementdate()
    {
        return $this->payementdate;
    }

    /**
     * Set membre
     *
     * @param \JSV\MembresBundle\Entity\Membres $membre
     * @return Achats
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

    /**
     * Set produit
     *
     * @param \JSV\ProduitsBundle\Entity\Produits $produit
     * @return Achats
     */
    public function setProduit(\JSV\ProduitsBundle\Entity\Produits $produit)
    {
        $this->produit = $produit;

        return $this;
    }

    /**
     * Get produit
     *
     * @return \JSV\ProduitsBundle\Entity\Produits 
     */
    public function getProduit()
    {
        return $this->produit;
    }
}
