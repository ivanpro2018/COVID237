<?php

namespace App\Repository;

use App\Entity\Aspnetuserlogins;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Aspnetuserlogins|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aspnetuserlogins|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aspnetuserlogins[]    findAll()
 * @method Aspnetuserlogins[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AspnetuserloginsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aspnetuserlogins::class);
    }

    // /**
    //  * @return Aspnetuserlogins[] Returns an array of Aspnetuserlogins objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Aspnetuserlogins
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
