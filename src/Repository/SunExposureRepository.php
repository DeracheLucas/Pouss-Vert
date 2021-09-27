<?php

namespace App\Repository;

use App\Entity\SunExposure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SunExposure|null find($id, $lockMode = null, $lockVersion = null)
 * @method SunExposure|null findOneBy(array $criteria, array $orderBy = null)
 * @method SunExposure[]    findAll()
 * @method SunExposure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SunExposureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SunExposure::class);
    }

    // /**
    //  * @return SunExposure[] Returns an array of SunExposure objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SunExposure
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
