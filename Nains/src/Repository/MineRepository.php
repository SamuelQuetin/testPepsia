<?php

namespace App\Repository;

use App\Entity\Mine;
use App\Entity\Nain;
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

        $a = $this->createQueryBuilder('m')
            ->InnerJoin('App\Entity\Nain','n','WITH','m = n.mine')
            ->select('m.id,m.nom,m.profondeur,AVG(n.taille) AS tailleMoy')
            ->groupBy('m.id,m.nom,m.profondeur')
            ->getQuery()
            ->getResult();
        return $a;
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
