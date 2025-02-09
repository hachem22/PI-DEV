<?php

namespace App\Entity;

use App\Repository\DossierMedicalRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DossierMedicalRepository::class)]
class DossierMedical
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le groupe sanguin est obligatoire.")]
    #[Assert\Length(max: 255, maxMessage: "Le groupe sanguin ne peut pas dépasser {{ limit }} caractères.")]
    private ?string $Groupe_sanguin = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: "Les allergies sont obligatoires.")]
    private ?string $Allergies = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: "Les vaccinations sont obligatoires.")]
    private ?string $Vaccinations = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $Antecedents_medicaux = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $Traitements_en_cours = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $Remarques = null;

    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'dossiersMedicaux')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Le patient est obligatoire.")]
    private ?Utilisateur $patient = null;

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

    public function getAntecedentsMedicaux(): ?string
    {
        return $this->Antecedents_medicaux;
    }

    public function setAntecedentsMedicaux(?string $Antecedents_medicaux): static
    {
        $this->Antecedents_medicaux = $Antecedents_medicaux;
        return $this;
    }

    public function getTraitementsEnCours(): ?string
    {
        return $this->Traitements_en_cours;
    }

    public function setTraitementsEnCours(?string $Traitements_en_cours): static
    {
        $this->Traitements_en_cours = $Traitements_en_cours;
        return $this;
    }

    public function getRemarques(): ?string
    {
        return $this->Remarques;
    }

    public function setRemarques(?string $Remarques): static
    {
        $this->Remarques = $Remarques;
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