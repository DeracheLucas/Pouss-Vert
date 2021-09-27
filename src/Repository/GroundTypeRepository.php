<?php

namespace App\Repository;

use App\Entity\GroundType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GroundType|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroundType|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroundType[]    findAll()
 * @method GroundType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroundTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroundType::class);
    }

    // /**
    //  * @return GroundType[] Returns an array of GroundType objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GroundType
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
