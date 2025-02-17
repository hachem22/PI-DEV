<?php

namespace App\Entity;

use App\Repository\DossierMedicalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DossierMedicalRepository::class)]
class DossierMedical
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Groupe_sanguin = null;

    #[ORM\Column(length: 255)]
    private ?string $Allergies = null;

    #[ORM\Column(length: 255)]
    private ?string $Vaccinations = null;

    /**
     * @var Collection<int, Visite>
     */
    #[ORM\OneToMany(targetEntity: Visite::class, mappedBy: 'dossierMedical')]
    private Collection $vistes;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Utilisateur $patient = null;

    public function __construct()
    {
        $this->vistes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupeSanguin(): ?string
    {
        return $this->Groupe_sanguin;
    }

    public function setGroupeSanguin(string $Groupe_sanguin): static
    {
        $this->Groupe_sanguin = $Groupe_sanguin;

        return $this;
    }

    public function getAllergies(): ?string
    {
        return $this->Allergies;
    }

    public function setAllergies(string $Allergies): static
    {
        $this->Allergies = $Allergies;

        return $this;
    }

    public function getVaccinations(): ?string
    {
        return $this->Vaccinations;
    }

    public function setVaccinations(string $Vaccinations): static
    {
        $this->Vaccinations = $Vaccinations;

        return $this;
    }

    /**
     * @return Collection<int, Visite>
     */
    public function getVistes(): Collection
    {
        return $this->vistes;
    }

    public function addViste(Visite $viste): static
    {
        if (!$this->vistes->contains($viste)) {
            $this->vistes->add($viste);
            $viste->setDossierMedical($this);
        }

        return $this;
    }

    public function removeViste(Visite $viste): static
    {
        if ($this->vistes->removeElement($viste)) {
            // set the owning side to null (unless already changed)
            if ($viste->getDossierMedical() === $this) {
                $viste->setDossierMedical(null);
            }
        }

        return $this;
    }

    public function getPatient(): ?Utilisateur
    {
        return $this->patient;
    }

    public function setPatient(?Utilisateur $patient): static
    {
        $this->patient = $patient;

        return $this;
    }
}
