<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class BaseRepository extends EntityRepository
{
    /**
     * @param object $entity
     * @param bool   $flush
     */
    public function save($entity, $flush = true)
    {
        $this->_em->persist($entity);

        if ($flush) {
            $this->_em->flush($entity);
        }
    }
}