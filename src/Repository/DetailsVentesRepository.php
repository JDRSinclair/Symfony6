<?php

namespace App\Repository;

use App\Entity\DetailsVentes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DetailsVentes>
 *
 * @method DetailsVentes|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailsVentes|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailsVentes[]    findAll()
 * @method DetailsVentes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailsVentesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailsVentes::class);
    }

//    /**
//     * @return DetailsVentes[] Returns an array of DetailsVentes objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DetailsVentes
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
