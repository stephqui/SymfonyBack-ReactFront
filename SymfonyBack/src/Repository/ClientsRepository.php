<?php

namespace App\Repository;

use App\Entity\Clients;
use App\Entity\Poste;
use App\Entity\Prestataire;
use App\Entity\Software;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use function PHPUnit\Framework\returnArgument;

/**
 * @extends ServiceEntityRepository<Clients>
 */
class ClientsRepository extends ServiceEntityRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clients::class);
    }

    public function findAllCustomerOrderByName(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c.raison_sociale', 'c.id_client', 'c.licence', 'c.produit', 'c.slug')
            ->orderBy('c.raison_sociale', 'ASC')
            ->getQuery()
            ->getResult();
    }



    /*public function findOneCustomerWithId(int $id): ?Clients
    {
        return $this->createQueryBuilder('c')
            ->Where('c.id_client = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }*/

    /**
     * @return Clients
     */

    public function getCustomerWithId(int $id): Clients
    {
        return $this->createQueryBuilder('c')
            ->select('c.slug', 'c.raison_sociale', 'c.produit', 'c.licence')
            //->select()
            ->where('c.id_client = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function getAllProductsBycustomer(int $slug): Clients
    {
        return $this->createQueryBuilder('c')
            ->select('c.slug', 'c.raison_sociale', 'c.produit', 'c.licence')
            //->select()
            ->where('c.slug = :slug')
            ->setParameter('slug', $slug)
            ->getQuery()
            ->getResult();
    }

    public function findAllPrestataireForCustomer()
    {
        return $this->createQueryBuilder('c')
            ->select('c.raison_sociale', 'p.nom', 'p.prenom', 'p.societe', 'p.telephone1', 'p.email')
            ->distinct()
            ->innerJoin(Prestataire::class, 'p', 'WITH', 'c.raison_sociale = p.raison_sociale')
            ->orderBy('c.raison_sociale', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findThePrestataireForCustomer($raisonSociale)
    {
        return $this->createQueryBuilder('c')
            ->select('c.raison_sociale', 'p.nom', 'p.prenom', 'p.societe', 'p.telephone1')
            ->where('c.raison_sociale = :raisonSociale')
            ->setParameter('raisonSociale', $raisonSociale)
            ->innerJoin(Prestataire::class, 'p', 'WITH', 'c.raison_sociale = p.raison_sociale')
            ->distinct()
            ->getQuery()
            ->getResult();
    }

    public function findAllComputersAllCustomers()
    {
        return $this->createQueryBuilder('c')
            ->select('c.raison_sociale', 'c.licence', 'c.produit', 's.date_maj', 
            's.nom_du_client','s.logiciel', 's.code_client', 'p.cle_pc', 'p.attribue_a', 'p.poste_maitre')
            ->innerJoin(Software::class, 's', 'WITH', 'c.licence = s.licence')
            ->innerJoin(Poste::class, 'p', 'WITH', 'c.licence =p.licence')
            ->orderBy('c.raison_sociale', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function paginatedClients(Request $request): Paginator
    {
        return new Paginator($this->createQueryBuilder('c'));
    }

}
