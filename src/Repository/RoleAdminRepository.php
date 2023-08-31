<?php

namespace App\Repository;

use App\Entity\RoleAdmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RoleAdmin>
 *
 * @method RoleAdmin|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoleAdmin|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoleAdmin[]    findAll()
 * @method RoleAdmin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoleAdminRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoleAdmin::class);
    }

//    /**
//     * @return RoleAdmin[] Returns an array of RoleAdmin objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RoleAdmin
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
