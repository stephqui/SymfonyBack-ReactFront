<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ClientsRepository::class)]
class Clients
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_client = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $slug = null;

    #[ORM\Column(nullable: true)]
    private ?bool $statut = null;

    #[ORM\Column(length: 3, nullable: true)]
    private ?string $civilite = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $prenom = null;

    #[ORM\Column(length: 30)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $raison_sociale = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $batiment = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $rue = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $complement_adresse = null;

    #[ORM\Column(nullable: true)]
    private ?int $code_postal = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $ville = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 16, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(length: 16, nullable: true)]
    private ?string $portable = null;

    #[ORM\Column]
    private ?int $licence = null;

    #[ORM\Column(length: 6, nullable: true)]
    private ?string $cle_web = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $produit = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $nombre_utilisateurs = null;

    #[ORM\Column(length: 50)]
    private ?string $raison_sociale_de_debridage = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $code_commercial = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    /**
     * @var Collection<int, Prestataire>
     */
    #[ORM\OneToMany(targetEntity: Prestataire::class, mappedBy: 'customer')]
    private Collection $prestataires;

    public function __construct()
    {
        $this->prestataires = new ArrayCollection();
        $this->software = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id_client;
    }

    public function isStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(?bool $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(?string $civilite): static
    {
        $this->civilite = $civilite;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raison_sociale;
    }

    public function setRaisonSociale(string $raison_sociale): static
    {
        $this->raison_sociale = $raison_sociale;

        return $this;
    }

    public function getBatiment(): ?string
    {
        return $this->batiment;
    }

    public function setBatiment(?string $batiment): static
    {
        $this->batiment = $batiment;

        return $this;
    }

    public function getRue(): ?string
    {
        return $this->rue;
    }

    public function setRue(?string $rue): static
    {
        $this->rue = $rue;

        return $this;
    }

    public function getComplementAdresse(): ?string
    {
        return $this->complement_adresse;
    }

    public function setComplementAdresse(?string $complement_adresse): static
    {
        $this->complement_adresse = $complement_adresse;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->code_postal;
    }

    public function setCodePostal(?int $code_postal): static
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): static
    {
        $this->ville = $ville;

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getPortable(): ?string
    {
        return $this->portable;
    }

    public function setPortable(?string $portable): static
    {
        $this->portable = $portable;

        return $this;
    }

    public function getLicence(): ?int
    {
        return $this->licence;
    }

    public function setLicence(int $licence): static
    {
        $this->licence = $licence;

        return $this;
    }

    public function getCleWeb(): ?string
    {
        return $this->cle_web;
    }

    public function setCleWeb(?string $cle_web): static
    {
        $this->cle_web = $cle_web;

        return $this;
    }

    public function getProduit(): ?string
    {
        return $this->produit;
    }

    public function setProduit(?string $produit): static
    {
        $this->produit = $produit;

        return $this;
    }

    public function getNombreUtilisateurs(): ?int
    {
        return $this->nombre_utilisateurs;
    }

    public function setNombreUtilisateurs(?int $nombre_utilisateurs): static
    {
        $this->nombre_utilisateurs = $nombre_utilisateurs;

        return $this;
    }

    public function getRaisonSocialeDeDebridage(): ?string
    {
        return $this->raison_sociale_de_debridage;
    }

    public function setRaisonSocialeDeDebridage(string $raison_sociale_de_debridage): static
    {
        $this->raison_sociale_de_debridage = $raison_sociale_de_debridage;

        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): static
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @return Collection<int, Prestataire>
     */
    public function getPrestataires(): Collection
    {
        return $this->prestataires;
    }

    public function addPrestataire(Prestataire $prestataire): static
    {
        if (!$this->prestataires->contains($prestataire)) {
            $this->prestataires->add($prestataire);
            $prestataire->setCustomer($this);
        }

        return $this;
    }

    public function removePrestataire(Prestataire $prestataire): static
    {
        if ($this->prestataires->removeElement($prestataire)) {
            // set the owning side to null (unless already changed)
            if ($prestataire->getCustomer() === $this) {
                $prestataire->setCustomer(null);
            }
        }

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection<int, Software>
     */
    public function getSoftware(): Collection
    {
        return $this->software;
    }

    public function addSoftware(Software $software): static
    {
        if (!$this->software->contains($software)) {
            $this->software->add($software);
            $software->setClient($this);
        }

        return $this;
    }

    public function removeSoftware(Software $software): static
    {
        if ($this->software->removeElement($software)) {
            // set the owning side to null (unless already changed)
            if ($software->getClient() === $this) {
                $software->setClient(null);
            }
        }

        return $this;
    }
}
