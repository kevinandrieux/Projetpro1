<?php

namespace App\Repository;

use App\Entity\Carving;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Carving|null find($id, $lockMode = null, $lockVersion = null)
 * @method Carving|null findOneBy(array $criteria, array $orderBy = null)
 * @method Carving[]    findAll()
 * @method Carving[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarvingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Carving::class);
    }

    // /**
    //  * @return Carving[] Returns an array of Carving objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Carving
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
