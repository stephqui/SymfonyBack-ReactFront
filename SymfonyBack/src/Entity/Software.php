<?php

namespace App\Entity;

use App\Repository\SoftwareRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: SoftwareRepository::class)]
class Software
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id_software = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $code_produit = null;

    #[ORM\Column(nullable: true)]
    private ?bool $statut = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 20)]
    private ?string $code_client = null;

    #[ORM\Column(length: 50)]
    private ?string $nom_du_client = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $detail_version = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $logiciel = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $gamme = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $nombre_poste = null;

    #[ORM\Column]
    private ?int $licence = null;

    #[ORM\Column(length: 7, nullable: true)]
    private ?string $cle_web = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $type_installation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $cle_pc = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $libelle = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_maj = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $mode = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $technologie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $serveur = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $nom_serveur = null;

    #[ORM\Column(nullable: true)]
    private ?bool $serveur_chez_nous = null;

    #[ORM\Column(nullable: true)]
    private ?bool $ebp_sur_serveur = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $version_sql = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $repertoire_dossier_partage = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $repertoire_sauvegarde = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $nom_contact_livraison = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $prenom_livraison = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $telephone_fixe_livraison = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $telephone_portable_livraison = null;

    #[ORM\Column(length: 40, nullable: true)]
    private ?string $adresse1_livraison = null;

    #[ORM\Column(nullable: true)]
    private ?int $code_postal_livraison = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $ville_livraison = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $notes = null;

    public function getId(): ?int
    {
        return $this->id_software;
    }

    public function getCodeProduit(): ?string
    {
        return $this->code_produit;
    }

    public function setCodeProduit(?string $code_produit): static
    {
        $this->code_produit = $code_produit;

        return $this;
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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): static
    {
        $this->version = $version;

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

    public function getDetailVersion(): ?string
    {
        return $this->detail_version;
    }

    public function setDetailVersion(?string $detail_version): static
    {
        $this->detail_version = $detail_version;

        return $this;
    }

    public function getLogiciel(): ?string
    {
        return $this->logiciel;
    }

    public function setLogiciel(?string $logiciel): static
    {
        $this->logiciel = $logiciel;

        return $this;
    }

    public function getGamme(): ?string
    {
        return $this->gamme;
    }

    public function setGamme(?string $gamme): static
    {
        $this->gamme = $gamme;

        return $this;
    }

    public function getNombrePoste(): ?int
    {
        return $this->nombre_poste;
    }

    public function setNombrePoste(?int $nombre_poste): static
    {
        $this->nombre_poste = $nombre_poste;

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

    public function getTypeInstallation(): ?string
    {
        return $this->type_installation;
    }

    public function setTypeInstallation(string $type_installation): static
    {
        $this->type_installation = $type_installation;

        return $this;
    }

    public function getClePc(): ?string
    {
        return $this->cle_pc;
    }

    public function setClePc(?string $cle_pc): static
    {
        $this->cle_pc = $cle_pc;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDateMaj(): ?\DateTimeInterface
    {
        return $this->date_maj;
    }

    public function setDateMaj(?\DateTimeInterface $date_maj): static
    {
        $this->date_maj = $date_maj;

        return $this;
    }

    public function getMode(): ?string
    {
        return $this->mode;
    }

    public function setMode(?string $mode): static
    {
        $this->mode = $mode;

        return $this;
    }

    public function getTechnologie(): ?string
    {
        return $this->technologie;
    }

    public function setTechnologie(?string $technologie): static
    {
        $this->technologie = $technologie;

        return $this;
    }

    public function isServeur(): ?bool
    {
        return $this->serveur;
    }

    public function setServeur(bool $serveur): static
    {
        $this->serveur = $serveur;

        return $this;
    }

    public function getNomServeur(): ?string
    {
        return $this->nom_serveur;
    }

    public function setNomServeur(string $nom_serveur): static
    {
        $this->nom_serveur = $nom_serveur;

        return $this;
    }

    public function isServeurChezNous(): ?bool
    {
        return $this->serveur_chez_nous;
    }

    public function setServeurChezNous(bool $serveur_chez_nous): static
    {
        $this->serveur_chez_nous = $serveur_chez_nous;

        return $this;
    }

    public function isEbpSurServeur(): ?bool
    {
        return $this->ebp_sur_serveur;
    }

    public function setEbpSurServeur(bool $ebp_sur_serveur): static
    {
        $this->ebp_sur_serveur = $ebp_sur_serveur;

        return $this;
    }

    public function getVersionSql(): ?string
    {
        return $this->version_sql;
    }

    public function setVersionSql(?string $version_sql): static
    {
        $this->version_sql = $version_sql;

        return $this;
    }

    public function getRepertoireDossierPartage(): ?string
    {
        return $this->repertoire_dossier_partage;
    }

    public function setRepertoireDossierPartage(?string $repertoire_dossier_partage): static
    {
        $this->repertoire_dossier_partage = $repertoire_dossier_partage;

        return $this;
    }

    public function getRepertoireSauvegarde(): ?string
    {
        return $this->repertoire_sauvegarde;
    }

    public function setRepertoireSauvegarde(?string $repertoire_sauvegarde): static
    {
        $this->repertoire_sauvegarde = $repertoire_sauvegarde;

        return $this;
    }

    public function getNomContactLivraison(): ?string
    {
        return $this->nom_contact_livraison;
    }

    public function setNomContactLivraison(?string $nom_contact_livraison): static
    {
        $this->nom_contact_livraison = $nom_contact_livraison;

        return $this;
    }

    public function getPrenomLivraison(): ?string
    {
        return $this->prenom_livraison;
    }

    public function setPrenomLivraison(?string $prenom_livraison): static
    {
        $this->prenom_livraison = $prenom_livraison;

        return $this;
    }

    public function getTelephoneFixeLivraison(): ?string
    {
        return $this->telephone_fixe_livraison;
    }

    public function setTelephoneFixeLivraison(?string $telephone_fixe_livraison): static
    {
        $this->telephone_fixe_livraison = $telephone_fixe_livraison;

        return $this;
    }

    public function getTelephonePortableLivraison(): ?string
    {
        return $this->telephone_portable_livraison;
    }

    public function setTelephonePortableLivraison(?string $telephone_portable_livraison): static
    {
        $this->telephone_portable_livraison = $telephone_portable_livraison;

        return $this;
    }

    public function getAdresse1Livraison(): ?string
    {
        return $this->adresse1_livraison;
    }

    public function setAdresse1Livraison(?string $adresse1_livraison): static
    {
        $this->adresse1_livraison = $adresse1_livraison;

        return $this;
    }

    public function getCodePostalLivraison(): ?int
    {
        return $this->code_postal_livraison;
    }

    public function setCodePostalLivraison(?int $code_postal_livraison): static
    {
        $this->code_postal_livraison = $code_postal_livraison;

        return $this;
    }

    public function getVilleLivraison(): ?string
    {
        return $this->ville_livraison;
    }

    public function setVilleLivraison(?string $ville_livraison): static
    {
        $this->ville_livraison = $ville_livraison;

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

    public function getClient(): ?Clients
    {
        return $this->client;
    }

    public function setClient(?Clients $client): static
    {
        $this->client = $client;

        return $this;
    }
}
