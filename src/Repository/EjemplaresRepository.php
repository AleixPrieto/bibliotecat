<?php

namespace App\Repository;

use App\Entity\Ejemplares;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ejemplares|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ejemplares|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ejemplares[]    findAll()
 * @method Ejemplares[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EjemplaresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ejemplares::class);
    }

    // /**
    //  * @return Ejemplares[] Returns an array of Ejemplares objects
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
    public function findOneBySomeField($value): ?Ejemplares
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
