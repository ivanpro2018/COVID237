<?php

namespace App\Repository;

use App\Entity\Aspnetroleclaims;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Aspnetroleclaims|null find($id, $lockMode = null, $lockVersion = null)
 * @method Aspnetroleclaims|null findOneBy(array $criteria, array $orderBy = null)
 * @method Aspnetroleclaims[]    findAll()
 * @method Aspnetroleclaims[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AspnetroleclaimsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Aspnetroleclaims::class);
    }

    // /**
    //  * @return Aspnetroleclaims[] Returns an array of Aspnetroleclaims objects
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
    public function findOneBySomeField($value): ?Aspnetroleclaims
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
