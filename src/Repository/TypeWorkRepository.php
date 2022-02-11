<?php

namespace App\Repository;

use App\Entity\TypeWork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeWork|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeWork|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeWork[]    findAll()
 * @method TypeWork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeWorkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeWork::class);
    }

    // /**
    //  * @return TypeWork[] Returns an array of TypeWork objects
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
    public function findOneBySomeField($value): ?TypeWork
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
