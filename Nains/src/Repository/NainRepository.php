<?php

namespace App\Repository;

use App\Entity\Nain;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Nain|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nain|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nain[]    findAll()
 * @method Nain[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NainRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nain::class);
    }

    public function getAll()
    {
        return $this->findAll();
    }


    /*
    public function findOneBySomeField($value): ?Nain
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
