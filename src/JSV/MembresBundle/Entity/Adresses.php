<?php

namespace JSV\MembresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresses
 *
 * @ORM\Table(name="adresses", indexes={@ORM\Index(name="fk_adresses_villes1_idx", columns={"commune"})})
 * @ORM\Entity
 */
class Adresses
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
     * @ORM\Column(name="adresse", type="string", length=100, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=10, nullable=false)
     */
    private $codepostal;

    /**
     * @var \Communes
     *
     * @ORM\ManyToOne(targetEntity="Communes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="commune", referencedColumnName="id")
     * })
     */
    private $commune;



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
     * Set adresse
     *
     * @param string $adresse
     * @return Adresses
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codepostal
     *
     * @param string $codepostal
     * @return Adresses
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return string 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set commune
     *
     * @param \JSV\MembresBundle\Entity\Communes $commune
     * @return Adresses
     */
    public function setCommune(\JSV\MembresBundle\Entity\Communes $commune = null)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return \JSV\MembresBundle\Entity\Communes 
     */
    public function getCommune()
    {
        return $this->commune;
    }
}
