<?php

namespace App\Repository;

use App\Entity\Egg;
use App\Entity\Search;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Egg|null find($id, $lockMode = null, $lockVersion = null)
 * @method Egg|null findOneBy(array $criteria, array $orderBy = null)
 * @method Egg[]    findAll()
 * @method Egg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EggRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Egg::class);
    }

    /**
     * @param Search $search
     * @return Query
     */
    public function findAllEggQuery(Search $search): Query
    {
        $query = $this->findAllQuery();

        if ($search->getType()) {
            $query = $query
                ->andWhere('egg.type = :type')
                ->setParameter('type', $search->getType());
        }

        if ($search->getTitle()) {
            $query = $query
                ->andWhere('egg.title = :title')
                ->setParameter('title', $search->getTitle());
        }

        if ($search->getCategory()) {
            $query = $query
                ->andWhere('egg.category = :category')
                ->setParameter('category', $search->getCategory());
        }

        return $query->getQuery();
    }

    /**
     * @return QueryBuilder
     */
    private function findAllQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('egg')
            ->orderBy('egg.id', 'ASC');
    }

    // /**
    //  * @return Egg[] Returns an array of Egg objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Egg
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
