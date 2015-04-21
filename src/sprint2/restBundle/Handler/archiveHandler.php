<?php
namespace sprint2\restBundle\Handler;

    
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;

use sprint2\realEstateBundle\Entity\Adresse;
use sprint2\RealEstate\AdminBundle\Entity\Archive;
use sprint2\realEstateBundle\Entity\Utilisateur;
use sprint2\realEstateBundle\Form\OffreType;
use sprint2\realEstateBundle\Models\Document;

class archiveHandler 
{

    private $om;
    private $archiveClass;
    private $repository;
    private $formFactory;

    // ..
    public function __construct(ObjectManager $om, $archiveClass, FormFactoryInterface $formFactory)
    {
        $this->om = $om;
        $this->archiveClass = $archiveClass;
        $this->repository = $this->om->getRepository($this->archiveClass);
        $this->formFactory = $formFactory;
    }


     /**
     * Get a list of offres.
     *
     * @param int $limit  the limit of the result
     * @param int $offset starting from the offset
     *
     * @return arra
     */
    public function getAll($limit = 5, $offset = 0)
    {
        return $this->repository->findAll();
    }
}