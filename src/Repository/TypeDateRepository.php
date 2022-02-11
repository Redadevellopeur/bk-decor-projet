<?php

namespace App\Repository;

use App\Entity\TypeDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeDate[]    findAll()
 * @method TypeDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeDateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeDate::class);
    }

    // /**
    //  * @return TypeDate[] Returns an array of TypeDate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeDate
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
