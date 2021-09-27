<?php

namespace App\Repository;

use App\Entity\GroundMoisture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GroundMoisture|null find($id, $lockMode = null, $lockVersion = null)
 * @method GroundMoisture|null findOneBy(array $criteria, array $orderBy = null)
 * @method GroundMoisture[]    findAll()
 * @method GroundMoisture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GroundMoistureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GroundMoisture::class);
    }

    // /**
    //  * @return GroundMoisture[] Returns an array of GroundMoisture objects
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
    public function findOneBySomeField($value): ?GroundMoisture
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
