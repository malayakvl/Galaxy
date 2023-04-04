<?php

namespace App\Repository;

use App\Entity\Atom2Star;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Atom2Star|null find($id, $lockMode = null, $lockVersion = null)
 * @method Atom2Star|null findOneBy(array $criteria, array $orderBy = null)
 * @method Atom2Star[]    findAll()
 * @method Atom2Star[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Atom2StarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Atom2Star::class);
    }

    // /**
    //  * @return Atom2Star[] Returns an array of Atom2Star objects
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
    public function findOneBySomeField($value): ?Atom2Star
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
