<?php

namespace App\Repository;

use App\Entity\Star;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use PhpParser\Node\Expr\Array_;

/**
 * @method Star|null find($id, $lockMode = null, $lockVersion = null)
 * @method Star|null findOneBy(array $criteria, array $orderBy = null)
 * @method Star[]    findAll()
 * @method Star[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StarRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Star::class);
    }

    // /**
    //  * @return Star[] Returns an array of Star objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function uniqueStars($galaxies, $atoms)
    {
        $entityManager = $this->getEntityManager();
        $atomsTmp = array(1, 2, 10, 11, 12);

        $conn = $this->getEntityManager()
            ->getConnection();
        $sql = "
            WITH
            ts AS (
                SELECT
                    DISTINCT
                    a.atom_id
                FROM galaxy g
                    INNER JOIN star s ON (g.id = s.galaxy_id)
                    INNER JOIN atom2_star a ON (s.id = a.star_id)
                WHERE TRUE
                    AND (g.name = 'Magellanic Clouds') -- Galaxy B
            )
            SELECT
                g.name,
                s.name,
                s.radius,
                s.temperature,
                (4.0/3.0 * pi() * POW(s.radius , 3)) AS volume
            #     a.atom_id,
            #     ts.atom_id
            FROM galaxy g
                INNER JOIN star s ON (g.id = s.galaxy_id)
                INNER JOIN atom2_star a ON (s.id = a.star_id)
                LEFT JOIN ts ON (a.atom_id = ts.atom_id)
            WHERE TRUE
                AND (g.name = 'Andromeda') -- Galaxy A
                AND (a.atom_id IN (" .implode($atomsTmp, ','). ")) -- List of atoms
                AND (ts.atom_id IS NULL)
            ORDER BY
                s.radius ASC,
                s.temperature ASC,
                s.name ASC
            ;
        ";
        $statement  = $conn->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();
        return $results;

//        $query = $entityManager->createQuery(
//            "WITH
//                ts AS (
//                    SELECT
//                        DISTINCT
//                        a.atom_id
//                    FROM galaxy g
//                        INNER JOIN star s ON (g.id = s.galaxy_id)
//                        INNER JOIN atom2_star a ON (s.id = a.star_id)
//                    WHERE TRUE
//                        AND (g.name = 'Magellanic Clouds') -- Galaxy B
//                )
//                SELECT
//                    g.name,
//                    s.name,
//                    s.radius,
//                    s.temperature,
//                    (4.0/3.0 * pi() * POW(s.radius , 3)) AS volume
//                #     a.atom_id,
//                #     ts.atom_id
//                FROM galaxy g
//                    INNER JOIN star s ON (g.id = s.galaxy_id)
//                    INNER JOIN atom2_star a ON (s.id = a.star_id)
//                    LEFT JOIN ts ON (a.atom_id = ts.atom_id)
//                WHERE TRUE
//                    AND (g.name = 'Andromeda') -- Galaxy A
//                    AND (a.atom_id IN :atomsArr) -- List of atoms
//                    AND (ts.atom_id IS NULL)
//                ORDER BY
//                    s.radius ASC,
//                    s.temperature ASC,
//                    s.name ASC
//            ;"
//        )->setParameter('atomsArr', $atoms);

//        return $query->getResult();
    }
}
