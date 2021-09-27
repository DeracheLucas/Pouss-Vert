<?php

namespace App\Repository;

use App\Entity\WaterNeeds;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WaterNeeds|null find($id, $lockMode = null, $lockVersion = null)
 * @method WaterNeeds|null findOneBy(array $criteria, array $orderBy = null)
 * @method WaterNeeds[]    findAll()
 * @method WaterNeeds[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WaterNeedsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WaterNeeds::class);
    }

    // /**
    //  * @return WaterNeeds[] Returns an array of WaterNeeds objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WaterNeeds
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
