<?php

namespace sprint2\AuthandlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 */
class Utilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="numMobile", type="string", length=255)
     */
    private $nummobile;

    /**
     * @var string
     *
     * @ORM\Column(name="numFix", type="string", length=255)
     */
    private $numfix;

    /**
     * @var string
     *
     * @ORM\Column(name="status_matrimonial", type="string", length=255)
     */
    private $statusMatrimonial;

    /**
     * @var integer
     *
     * @ORM\Column(name="role", type="integer")
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="URLp", type="string", length=255)
     */
    private $urlp;


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
     * Set mail
     *
     * @param string $mail
     * @return Utilisateur
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
     * Set password
     *
     * @param string $password
     * @return Utilisateur
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
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
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
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
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
     * Set nummobile
     *
     * @param string $nummobile
     * @return Utilisateur
     */
    public function setNummobile($nummobile)
    {
        $this->nummobile = $nummobile;

        return $this;
    }

    /**
     * Get nummobile
     *
     * @return string 
     */
    public function getNummobile()
    {
        return $this->nummobile;
    }

    /**
     * Set numfix
     *
     * @param string $numfix
     * @return Utilisateur
     */
    public function setNumfix($numfix)
    {
        $this->numfix = $numfix;

        return $this;
    }

    /**
     * Get numfix
     *
     * @return string 
     */
    public function getNumfix()
    {
        return $this->numfix;
    }

    /**
     * Set statusMatrimonial
     *
     * @param string $statusMatrimonial
     * @return Utilisateur
     */
    public function setStatusMatrimonial($statusMatrimonial)
    {
        $this->statusMatrimonial = $statusMatrimonial;

        return $this;
    }

    /**
     * Get statusMatrimonial
     *
     * @return string 
     */
    public function getStatusMatrimonial()
    {
        return $this->statusMatrimonial;
    }

    /**
     * Set role
     *
     * @param integer $role
     * @return Utilisateur
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set urlp
     *
     * @param string $urlp
     * @return Utilisateur
     */
    public function setUrlp($urlp)
    {
        $this->urlp = $urlp;

        return $this;
    }

    /**
     * Get urlp
     *
     * @return string 
     */
    public function getUrlp()
    {
        return $this->urlp;
    }
}
