<?php

namespace App\Entity;

use App\Enum\UtilisateurRole;
use App\Enum\MedecinSpecialite;
use App\Repository\UtilisateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    private ?string $Adress = null;

    #[ORM\Column]
    private ?int $Tel = null;

    #[ORM\Column(length: 255)]
    private ?string $Grade = null;

    #[ORM\Column(enumType: UtilisateurRole::class)]
    private ?UtilisateurRole $utilisateurRole = null;

    #[ORM\Column(enumType: MedecinSpecialite::class)]
    private ?MedecinSpecialite $medecinSpecilaite = null;

    #[ORM\ManyToOne(inversedBy: 'ListeUtilisateur')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $service = null;

    #[ORM\ManyToOne(inversedBy: 'Service')]
    private ?RendezVous $rendezVous = null;

    /**
     * @var Collection<int, Planning>
     */
    #[ORM\OneToMany(targetEntity: Planning::class, mappedBy: 'Medecin')]
    private Collection $plannings;

    public function __construct()
    {
        $this->plannings = new ArrayCollection();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): static
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): static
    {
        $this->Email = $Email;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->Adress;
    }

    public function setAdress(string $Adress): static
    {
        $this->Adress = $Adress;

        return $this;
    }

    public function getTel(): ?int
    {
        return $this->Tel;
    }

    public function setTel(int $Tel): static
    {
        $this->Tel = $Tel;

        return $this;
    }

    public function getGrade(): ?string
    {
        return $this->Grade;
    }

    public function setGrade(string $Grade): static
    {
        $this->Grade = $Grade;

        return $this;
    }

    public function getUtilisateurRole(): ?UtilisateurRole
    {
        return $this->utilisateurRole;
    }

    public function setUtilisateurRole(UtilisateurRole $utilisateurRole): static
    {
        $this->utilisateurRole = $utilisateurRole;

        return $this;
    }

    public function getMedecinSpecilaite(): ?MedecinSpecialite
    {
        return $this->medecinSpecilaite;
    }

    public function setMedecinSpecilaite(MedecinSpecialite $medecinSpecilaite): static
    {
        $this->medecinSpecilaite = $medecinSpecilaite;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): static
    {
        $this->service = $service;

        return $this;
    }

    public function getRendezVous(): ?RendezVous
    {
        return $this->rendezVous;
    }

    public function setRendezVous(?RendezVous $rendezVous): static
    {
        $this->rendezVous = $rendezVous;

        return $this;
    }

    /**
     * @return Collection<int, Planning>
     */
    public function getPlannings(): Collection
    {
        return $this->plannings;
    }

    public function addPlanning(Planning $planning): static
    {
        if (!$this->plannings->contains($planning)) {
            $this->plannings->add($planning);
            $planning->setMedecin($this);
        }

        return $this;
    }

    public function removePlanning(Planning $planning): static
    {
        if ($this->plannings->removeElement($planning)) {
            // set the owning side to null (unless already changed)
            if ($planning->getMedecin() === $this) {
                $planning->setMedecin(null);
            }
        }

        return $this;
    }
}