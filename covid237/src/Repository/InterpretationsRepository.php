<?php

namespace App\Repository;

use App\Entity\Interpretations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Interpretations|null find($id, $lockMode = null, $lockVersion = null)
 * @method Interpretations|null findOneBy(array $criteria, array $orderBy = null)
 * @method Interpretations[]    findAll()
 * @method Interpretations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InterpretationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Interpretations::class);
    }

    // /**
    //  * @return Interpretations[] Returns an array of Interpretations objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Interpretations
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
