<?php

namespace App\Entity;

use App\Enum\ReclamationStatut;
use App\Repository\TraitementReclamationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TraitementReclamationRepository::class)]
class TraitementReclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $commentaire = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datetraitement = null;

    #[ORM\Column(enumType: ReclamationStatut::class)]
    private ?ReclamationStatut $etat = null;

    #[ORM\ManyToOne(targetEntity: Reclamation::class, inversedBy: 'traitements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Reclamation $reclamation = null;
    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getDatetraitement(): ?\DateTimeInterface
    {
        return $this->datetraitement;
    }

    public function setDatetraitement(\DateTimeInterface $datetraitement): static
    {
        $this->datetraitement = $datetraitement;

        return $this;
    }

    public function getEtat(): ?ReclamationStatut
    {
        return $this->etat;
    }

    public function setEtat(ReclamationStatut|string $etat): self
    {
        if (is_string($etat)) {
            $etat = ReclamationStatut::tryFrom($etat); // Convertir la chaîne en Enum
        }
        
        $this->etat = $etat;
        return $this;
    }

    public function getReclamation(): ?Reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(?Reclamation $reclamation): self
    {
        $this->reclamation = $reclamation;
        return $this;
    }
}
