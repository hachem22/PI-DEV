<?php

namespace App\Entity;

use App\Enum\Rdvstatus;
use App\Repository\RendezVousRepository;
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

    #[ORM\Column(enumType: Rdvstatus::class)]
    private ?Rdvstatus $status = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $heure = null;

    #[ORM\OneToOne(mappedBy: 'Rdv', cascade: ['persist', 'remove'])]
    private ?Visite $visite = null;

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

    public function getStatus(): ?Rdvstatus
    {
        return $this->status;
    }

    public function setStatus(Rdvstatus $status): static
    {
        $this->status = $status;

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
}
