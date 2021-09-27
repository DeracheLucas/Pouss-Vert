<?php

namespace App\Repository;

use App\Entity\GroundPh;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GroundPh|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroundPh|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroundPh[]    findAll()
 * @method GroundPh[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroundPhRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroundPh::class);
    }

    // /**
    //  * @return GroundPh[] Returns an array of GroundPh objects
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
    public function findOneBySomeField($value): ?GroundPh
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
