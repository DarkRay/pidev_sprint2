<?php

namespace sprint2\GerantBundle\Entity;

use Doctrine\ORM\EntityRepository;

class OffreRepository extends EntityRepository {

    public function findoffreDQL($id) {
        $query = $this->getEntityManager()
                ->createQuery("SELECT o FROM sprint2GerantBundle:Offre o WHERE o.idGerant = :id ORDER BY o.datepublication DESC");
        $query->setParameter('id', $id);
        return $query->getResult();
    }
    
    public function bestoffreDQL($id) {
        $query = $this->getEntityManager()
                ->createQuery("SELECT o FROM sprint2GerantBundle:Offre o WHERE o.idGerant = :id ORDER BY o.note DESC");
        $query->setParameter('id', $id);
        return $query->getResult();
    }
}
