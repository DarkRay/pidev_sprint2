<?php
namespace sprint2\restBundle\Handler;

    
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormFactoryInterface;

class offreHandler 
{

    private $om;
    private $entityClass;
    private $repository;
    private $formFactory;

    // ..
    public function __construct(ObjectManager $om, $entityClass)
    {
        $this->om = $om;
        $this->entityClass = $entityClass;
        $this->repository = $this->om->getRepository($this->entityClass);
    }


     /**
     * Get a list of Pages.
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