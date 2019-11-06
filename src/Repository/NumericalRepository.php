<?php

namespace App\Repository;

use App\Entity\Numerical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Numerical|null find($id, $lockMode = null, $lockVersion = null)
 * @method Numerical|null findOneBy(array $criteria, array $orderBy = null)
 * @method Numerical[]    findAll()
 * @method Numerical[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NumericalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Numerical::class);
    }

    // /**
    //  * @return Numerical[] Returns an array of Numerical objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Numerical
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
