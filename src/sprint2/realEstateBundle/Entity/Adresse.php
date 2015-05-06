<?php

namespace sprint2\realEstateBundle\Entity;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;


use Doctrine\ORM\Mapping as ORM;

/**
 * The following annotations tells the serializer to skip all properties which
 * have not marked with .
 *
 * 
 */

/**
 * 
 * Adresse
 * 
 * @ORM\Table(name="adresse")
 * @XmlRoot("adresse")
 * @ORM\Entity (repositoryClass="sprint2\realEstateBundle\Entity\AdresseRepository")
 * 
 */



class Adresse
{
 
     
    /**
     * 
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
     * @ORM\Column(name="gouvernorat", type="string", length=50, nullable=true)
     */
    private $gouvernorat;

    /**
     * @var integer
     *
     * @ORM\Column(name="codePostal", type="integer", nullable=true)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=25, nullable=true)
     */
    private $ville;



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
     * Set gouvernorat
     *
     * @param string $gouvernorat
     * @return Adresse
     */
    public function setGouvernorat($gouvernorat)
    {
        $this->gouvernorat = $gouvernorat;

        return $this;
    }

    /**
     * Get gouvernorat
     *
     * @return string 
     */
    public function getGouvernorat()
    {
        return $this->gouvernorat;
    }

    /**
     * Set codepostal
     *
     * @param integer $codepostal
     * @return Adresse
     */
    public function setCodepostal($codepostal)
    {
        $this->codepostal = $codepostal;

        return $this;
    }

    /**
     * Get codepostal
     *
     * @return integer 
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }
}
