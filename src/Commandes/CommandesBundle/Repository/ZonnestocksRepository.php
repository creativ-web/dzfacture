<?php

namespace Commandes\CommandesBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ZonnestocksRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */

class ZonnestocksRepository extends EntityRepository
{
    public function findAll()
    {
        $qb = $this->createQueryBuilder('u')
            ->Select('u')
                ;

        return $qb->getQuery()->getResult();
    }


}