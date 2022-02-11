<?php

namespace App\Repository;

use App\Entity\TypeHome;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeHome|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeHome|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeHome[]    findAll()
 * @method TypeHome[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeHomeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeHome::class);
    }

    // /**
    //  * @return TypeHome[] Returns an array of TypeHome objects
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
    public function findOneBySomeField($value): ?TypeHome
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
