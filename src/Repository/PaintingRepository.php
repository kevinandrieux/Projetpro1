<?php
declare(strict_types=1);

/* Le code de cette page fut réalisé par Bruno Prédot - 11/2019
created by Prédot Bruno - 11/2019 */

namespace App\Repository;

use App\Entity\Painting;
use App\Entity\Search;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

/**
 * @method Painting|null find($id, $lockMode = null, $lockVersion = null)
 * @method Painting|null findOneBy(array $criteria, array $orderBy = null)
 * @method Painting[]    findAll()
 * @method Painting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PaintingRepository extends ServiceEntityRepository
{
    /**
     * PaintingRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Painting::class);
    }


    public function findAllPaintingQuery(Search $search): Query
    {
        $query = $this->findAllQuery();

        if ($search->getType()) {
            $query = $query
                ->andWhere('painting.type = :type')
                ->setParameter('type', $search->getType());
        }

        if ($search->getTitle()) {
            $query = $query
                ->andWhere('painting.title = :title')
                ->setParameter('title', $search->getTitle());
        }

        if ($search->getCategory()) {
            $query = $query
                ->andWhere('painting.category = :category')
                ->setParameter('category', $search->getCategory());
        }

        return $query->getQuery();
    }


    private function findAllQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('painting')
            ->orderBy('painting.id', 'ASC');
    }

    // /**
    //  * @return Painting[] Returns an array of Painting objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Painting
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
