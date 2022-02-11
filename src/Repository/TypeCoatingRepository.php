<?php

namespace App\Repository;

use App\Entity\TypeCoating;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeCoating|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeCoating|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeCoating[]    findAll()
 * @method TypeCoating[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeCoatingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeCoating::class);
    }

    // /**
    //  * @return TypeCoating[] Returns an array of TypeCoating objects
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
    public function findOneBySomeField($value): ?TypeCoating
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
