<?php

namespace sprint2\GerantBundle\Entity;

use Doctrine\ORM\EntityRepository;

class BoitemessagesRepository extends EntityRepository {

    public function findboitemessagesDQL($id) {
        $query = $this->getEntityManager()
                ->createQuery("SELECT m FROM sprint2GerantBundle:Boitemessages m WHERE m.idDestinataire = :id ORDER BY m.tempsEnvoi DESC");
        $query->setParameter('id', $id);
        return $query->getResult();
    }

    public function vueDQL($id) {
        $query = $this->getEntityManager()
                ->createQuery("UPDATE sprint2GerantBundle:Boitemessages m SET m.vu = 1 WHERE m.idDestinataire = :id AND m.vu = 0");
        $query->setParameter('id', $id);
        return $query->execute();
    }

    public function nonVuCountDQL($id) {
        $query = $this->getEntityManager()
                ->createQuery("SELECT Count(m.id) FROM sprint2GerantBundle:Boitemessages m WHERE m.idDestinataire = :id AND m.vu = 0");
        $query->setParameter('id', $id);
        return $query->getSingleScalarResult();
    }
}
