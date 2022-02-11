<?php

namespace App\Repository;

use App\Entity\HomeStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method HomeStatus|null find($id, $lockMode = null, $lockVersion = null)
 * @method HomeStatus|null findOneBy(array $criteria, array $orderBy = null)
 * @method HomeStatus[]    findAll()
 * @method HomeStatus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HomeStatusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HomeStatus::class);
    }

    // /**
    //  * @return HomeStatus[] Returns an array of HomeStatus objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HomeStatus
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
