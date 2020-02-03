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

    public function getAll()
    {
        return $this->findAll();
    }

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
