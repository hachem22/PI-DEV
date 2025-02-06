<?php

namespace App\Entity;

use App\Repository\VisiteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VisiteRepository::class)]
class Visite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_visite = null;

    #[ORM\Column(length: 255)]
    private ?string $diagnostic = null;

    #[ORM\Column(length: 255)]
    private ?string $ordonnace = null;

    #[ORM\Column(length: 255)]
    private ?string $ceteficat = null;

    #[ORM\OneToOne(inversedBy: 'visite', cascade: ['persist', 'remove'])]
    private ?RendezVous $Rdv = null;

    #[ORM\ManyToOne(inversedBy: 'vistes')]
    private ?DossierMedical $dossierMedical = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateVisite(): ?\DateTimeInterface
    {
        return $this->date_visite;
    }

    public function setDateVisite(\DateTimeInterface $date_visite): static
    {
        $this->date_visite = $date_visite;

        return $this;
    }

    public function getDiagnostic(): ?string
    {
        return $this->diagnostic;
    }

    public function setDiagnostic(string $diagnostic): static
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }

    public function getOrdonnace(): ?string
    {
        return $this->ordonnace;
    }

    public function setOrdonnace(string $ordonnace): static
    {
        $this->ordonnace = $ordonnace;

        return $this;
    }

    public function getCeteficat(): ?string
    {
        return $this->ceteficat;
    }

    public function setCeteficat(string $ceteficat): static
    {
        $this->ceteficat = $ceteficat;

        return $this;
    }

    public function getRdv(): ?RendezVous
    {
        return $this->Rdv;
    }

    public function setRdv(?RendezVous $Rdv): static
    {
        $this->Rdv = $Rdv;

        return $this;
    }

    public function getDossierMedical(): ?DossierMedical
    {
        return $this->dossierMedical;
    }

    public function setDossierMedical(?DossierMedical $dossierMedical): static
    {
        $this->dossierMedical = $dossierMedical;

        return $this;
    }
}
