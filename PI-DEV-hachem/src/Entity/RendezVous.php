<?php

namespace App\Entity;

use App\Enum\RendezVousStatus;
use App\Repository\RendezVousRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    // Relation avec le médecin
    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: 'rendezVous')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Utilisateur $medecin = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heure = null;

    // Relation avec la visite
    #[ORM\OneToOne(mappedBy: 'Rdv', cascade: ['persist', 'remove'])]
    private ?Visite $visite = null;

    // Statut du rendez-vous (enum)
    #[ORM\Column(type: 'string', length: 50, nullable: true)] // Modifier le type en 'string' et nullable
    private ?string $rendezVousStatus = null;

    // Relation avec le service
    #[ORM\ManyToOne(targetEntity: Service::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $service = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;
        return $this;
    }

    public function getMedecin(): ?Utilisateur
    {
        return $this->medecin;
    }

    public function setMedecin(?Utilisateur $medecin): static
    {
        $this->medecin = $medecin;
        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): static
    {
        $this->heure = $heure;
        return $this;
    }

    public function getVisite(): ?Visite
    {
        return $this->visite;
    }

    public function setVisite(?Visite $visite): static
    {
        // unset the owning side of the relation if necessary
        if ($visite === null && $this->visite !== null) {
            $this->visite->setRdv(null);
        }

        // set the owning side of the relation if necessary
        if ($visite !== null && $visite->getRdv() !== $this) {
            $visite->setRdv($this);
        }

        $this->visite = $visite;

        return $this;
    }

    public function getRendezVousStatus(): ?string
    {
        return $this->rendezVousStatus;
    }
    public function setRendezVousStatus(?string $rendezVousStatus): static
    {
        $this->rendezVousStatus = $rendezVousStatus;
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

}
