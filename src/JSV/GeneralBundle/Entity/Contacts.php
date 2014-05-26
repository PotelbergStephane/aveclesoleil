<?php

namespace JSV\GeneralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacts
 *
 * @ORM\Table(name="contacts", uniqueConstraints={@ORM\UniqueConstraint(name="mail_UNIQUE", columns={"mail"})})
 * @ORM\Entity
 */
class Contacts
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="id", type="boolean", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="titreCiviliteFR", type="boolean", nullable=false)
     */
    private $titrecivilitefr;

    /**
     * @var boolean
     *
     * @ORM\Column(name="titreCiviliteEN", type="boolean", nullable=false)
     */
    private $titreciviliteen;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=60, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=60, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=90, nullable=false)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=20, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=20, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="fonnctionFR", type="text", nullable=false)
     */
    private $fonnctionfr;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionEN", type="text", nullable=true)
     */
    private $fonctionen;



    /**
     * Get id
     *
     * @return boolean 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titrecivilitefr
     *
     * @param boolean $titrecivilitefr
     * @return Contacts
     */
    public function setTitrecivilitefr($titrecivilitefr)
    {
        $this->titrecivilitefr = $titrecivilitefr;

        return $this;
    }

    /**
     * Get titrecivilitefr
     *
     * @return boolean 
     */
    public function getTitrecivilitefr()
    {
        return $this->titrecivilitefr;
    }

    /**
     * Set titreciviliteen
     *
     * @param boolean $titreciviliteen
     * @return Contacts
     */
    public function setTitreciviliteen($titreciviliteen)
    {
        $this->titreciviliteen = $titreciviliteen;

        return $this;
    }

    /**
     * Get titreciviliteen
     *
     * @return boolean 
     */
    public function getTitreciviliteen()
    {
        return $this->titreciviliteen;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Contacts
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Contacts
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
     * Set mail
     *
     * @param string $mail
     * @return Contacts
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Contacts
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Contacts
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set fonnctionfr
     *
     * @param string $fonnctionfr
     * @return Contacts
     */
    public function setFonnctionfr($fonnctionfr)
    {
        $this->fonnctionfr = $fonnctionfr;

        return $this;
    }

    /**
     * Get fonnctionfr
     *
     * @return string 
     */
    public function getFonnctionfr()
    {
        return $this->fonnctionfr;
    }

    /**
     * Set fonctionen
     *
     * @param string $fonctionen
     * @return Contacts
     */
    public function setFonctionen($fonctionen)
    {
        $this->fonctionen = $fonctionen;

        return $this;
    }

    /**
     * Get fonctionen
     *
     * @return string 
     */
    public function getFonctionen()
    {
        return $this->fonctionen;
    }
}
