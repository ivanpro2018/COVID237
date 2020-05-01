<?php

namespace App\Repository;

use App\Entity\Efmigrationshistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Efmigrationshistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method Efmigrationshistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method Efmigrationshistory[]    findAll()
 * @method Efmigrationshistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EfmigrationshistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Efmigrationshistory::class);
    }

    // /**
    //  * @return Efmigrationshistory[] Returns an array of Efmigrationshistory objects
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
    public function findOneBySomeField($value): ?Efmigrationshistory
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
