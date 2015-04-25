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

class adresseHandler 
{

    private $om;
    private $adressClass;
    private $repository;
    private $formFactory;

    // ..
    public function __construct(ObjectManager $om, $adressClass, FormFactoryInterface $formFactory)
    {
        $this->om = $om;
        $this->adressClass = $adressClass;
        $this->repository = $this->om->getRepository('realEstateBundle:Adresse');
        $this->formFactory = $formFactory;
    }


    /**
     * Get a list of adresses.
     *
     * @param int $limit  the limit of the result
     * @param int $offset starting from the offset
     *
     * @return array
     */
    public function getAll($limit = 5, $offset = 0)
    {
        return $this->repository->findBy(array(),null,$limit,$offset);
    }

    public function getGov($limit = 5, $offset = 0)
    {
        return $this->repository->findGouvernorat(24);
    }

     public function getByGov($gouvernorat){
        
        return $this->repository->findvilleGouvernorat(array('gouvernorat'=>$gouvernorat));
    }

    public function getByVille($ville){

        return $this->repository->findCodeVille(array('ville'=>$ville));
    }

    public function getByCode($code){

        return $this->repository->findOneBy(array('codepostal'=>$code));

    }
}




















