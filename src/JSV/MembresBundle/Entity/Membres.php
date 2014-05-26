<?php

namespace JSV\MembresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Membres
 *
 * @ORM\Table(name="membres", uniqueConstraints={@ORM\UniqueConstraint(name="pseudo_UNIQUE", columns={"pseudo"}), @ORM\UniqueConstraint(name="mail_UNIQUE", columns={"mail"}), @ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})}, indexes={@ORM\Index(name="fk_membres_adresses1_idx", columns={"adresse"})})
 * @ORM\Entity
 */
class Membres
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
     * @ORM\Column(name="pseudo", type="string", length=50, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

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
     * @var \Adresses
     *
     * @ORM\ManyToOne(targetEntity="Adresses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="adresse", referencedColumnName="id")
     * })
     */
    private $adresse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="\JSV\FormationsBundle\Entity\Formations", inversedBy="membre")
     * @ORM\JoinTable(name="inscriptions",
     *   joinColumns={
     *     @ORM\JoinColumn(name="membre", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="formation", referencedColumnName="id")
     *   }
     * )
     */
    private $formation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->formation = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set pseudo
     *
     * @param string $pseudo
     * @return Membres
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Membres
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set titrecivilitefr
     *
     * @param boolean $titrecivilitefr
     * @return Membres
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
     * @return Membres
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
     * @return Membres
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
     * @return Membres
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
     * @return Membres
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
     * Set adresse
     *
     * @param \JSV\MembresBundle\Entity\Adresses $adresse
     * @return Membres
     */
    public function setAdresse(\JSV\MembresBundle\Entity\Adresses $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \JSV\MembresBundle\Entity\Adresses 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Add formation
     *
     * @param \JSV\FormationsBundle\Entity\Formations $formation
     * @return Membres
     */
    public function addFormation(\JSV\FormationsBundle\Entity\Formations $formation)
    {
        $this->formation[] = $formation;

        return $this;
    }

    /**
     * Remove formation
     *
     * @param \JSV\FormationsBundle\Entity\Formations $formation
     */
    public function removeFormation(\JSV\FormationsBundle\Entity\Formations $formation)
    {
        $this->formation->removeElement($formation);
    }

    /**
     * Get formation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFormation()
    {
        return $this->formation;
    }
}
