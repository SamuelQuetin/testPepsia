<?php

namespace App\Repository;

use App\Entity\Mine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Mine|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mine|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mine[]    findAll()
 * @method Mine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mine::class);
    }

    // /**
    //  * @return Mine[] Returns an array of Mine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mine
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
