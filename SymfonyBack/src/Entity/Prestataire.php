<?php

namespace App\Entity;

use App\Repository\PrestataireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PrestataireRepository::class)]
class Prestataire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_prestataire = null;

    #[ORM\Column(length: 40)]
    private ?string $societe = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nom = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 16, nullable: true)]
    private ?string $telephone1 = null;

    #[ORM\Column(length: 16, nullable: true)]
    private ?string $telephone2 = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 30)]
    private ?string $code_client = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_du_client = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $raison_sociale = null;

    /**
    *@ORM\ManyToOne(inversedBy: 'prestataires')
    *@ORM\JoinColumn(name="customer", referencedColumnName="id_client")
     */
    private ?Clients $customer = null;

    public function getId(): ?int
    {
        return $this->id_prestataire;
    }

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(string $societe): static
    {
        $this->societe = $societe;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone1(): ?string
    {
        return $this->telephone1;
    }

    public function setTelephone1(?string $telephone1): static
    {
        $this->telephone1 = $telephone1;

        return $this;
    }

    public function getTelephone2(): ?string
    {
        return $this->telephone2;
    }

    public function setTelephone2(?string $telephone2): static
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getCodeClient(): ?string
    {
        return $this->code_client;
    }

    public function setCodeClient(string $code_client): static
    {
        $this->code_client = $code_client;

        return $this;
    }

    public function getNomDuClient(): ?string
    {
        return $this->nom_du_client;
    }

    public function setNomDuClient(string $nom_du_client): static
    {
        $this->nom_du_client = $nom_du_client;

        return $this;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raison_sociale;
    }

    public function setRaisonSociale(?string $raison_sociale): static
    {
        $this->raison_sociale = $raison_sociale;

        return $this;
    }

    public function getCustomer(): ?Clients
    {
        return $this->customer;
    }

    public function setCustomer(?Clients $customer): static
    {
        $this->customer = $customer;

        return $this;
    }
}
