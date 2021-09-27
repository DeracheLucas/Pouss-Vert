<?php

namespace App\Repository;

use App\Entity\ColdResistance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ColdResistance|null find($id, $lockMode = null, $lockVersion = null)
 * @method ColdResistance|null findOneBy(array $criteria, array $orderBy = null)
 * @method ColdResistance[]    findAll()
 * @method ColdResistance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ColdResistanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ColdResistance::class);
    }

    // /**
    //  * @return ColdResistance[] Returns an array of ColdResistance objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ColdResistance
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
