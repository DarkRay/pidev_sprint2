<?php

namespace sprint2\GerantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boitemessages
 *
 * @ORM\Table(name="boitemessages", indexes={@ORM\Index(name="id_destinataire", columns={"id_destinataire"}), @ORM\Index(name="id_expediteur", columns={"id_expediteur"})})
 * @ORM\Entity(repositoryClass="sprint2\GerantBundle\Entity\BoitemessagesRepository")
 */
class Boitemessages
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
     * @ORM\Column(name="contenu", type="string", length=500, nullable=false)
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="vu", type="integer", nullable=true)
     */
    private $vu = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="temps_envoi", type="datetime", nullable=true)
     */
    private $tempsEnvoi = 'CURRENT_TIMESTAMP';

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_destinataire", referencedColumnName="id")
     * })
     */
    private $idDestinataire;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_expediteur", referencedColumnName="id")
     * })
     */
    private $idExpediteur;



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
     * Set contenu
     *
     * @param string $contenu
     * @return Boitemessages
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set vu
     *
     * @param integer $vu
     * @return Boitemessages
     */
    public function setVu($vu)
    {
        $this->vu = $vu;

        return $this;
    }

    /**
     * Get vu
     *
     * @return integer 
     */
    public function getVu()
    {
        return $this->vu;
    }

    /**
     * Set tempsEnvoi
     *
     * @param \DateTime $tempsEnvoi
     * @return Boitemessages
     */
    public function setTempsEnvoi($tempsEnvoi)
    {
        $this->tempsEnvoi = $tempsEnvoi;

        return $this;
    }

    /**
     * Get tempsEnvoi
     *
     * @return \DateTime 
     */
    public function getTempsEnvoi()
    {
        return $this->tempsEnvoi;
    }

    /**
     * Set idDestinataire
     *
     * @param \sprint2\GerantBundle\Entity\Utilisateur $idDestinataire
     * @return Boitemessages
     */
    public function setIdDestinataire(\sprint2\GerantBundle\Entity\Utilisateur $idDestinataire = null)
    {
        $this->idDestinataire = $idDestinataire;

        return $this;
    }

    /**
     * Get idDestinataire
     *
     * @return \sprint2\GerantBundle\Entity\Utilisateur 
     */
    public function getIdDestinataire()
    {
        return $this->idDestinataire;
    }

    /**
     * Set idExpediteur
     *
     * @param \sprint2\GerantBundle\Entity\Utilisateur $idExpediteur
     * @return Boitemessages
     */
    public function setIdExpediteur(\sprint2\GerantBundle\Entity\Utilisateur $idExpediteur = null)
    {
        $this->idExpediteur = $idExpediteur;

        return $this;
    }

    /**
     * Get idExpediteur
     *
     * @return \sprint2\GerantBundle\Entity\Utilisateur 
     */
    public function getIdExpediteur()
    {
        return $this->idExpediteur;
    }
}
