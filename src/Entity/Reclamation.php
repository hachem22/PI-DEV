<?php

namespace App\Entity;

use App\Enum\ReclamationStatut;
use App\Enum\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReclamationRepository::class)]
class Reclamation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(enumType: ReclamationType::class)]
    private ?ReclamationType $type = null;

    #[ORM\Column(enumType: ReclamationStatut::class)]
    private ?ReclamationStatut $statut = ReclamationStatut::EN_ATTENTE;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datecreation = null;

    #[ORM\ManyToOne(targetEntity: Categorie::class, inversedBy: 'reclamations')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $categorie = null;

    /**
     * @var Collection<int, TraitementReclamation>
     */
   
    
    #[ORM\OneToMany(mappedBy: 'reclamation', targetEntity: TraitementReclamation::class, cascade: ['persist', 'remove'])]
    private Collection $traitementReclamations;
    

    public function __construct()
    {
        $this->traitementReclamations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getType(): ?ReclamationType
    {
        return $this->type;
    }

    public function setType(ReclamationType $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getStatut(): ReclamationStatut
    {
        return $this->statut;
    }

    public function setStatut(ReclamationStatut $statut): self
    {
        $this->statut = $statut;
        return $this;
    }


    public function getDatecreation(): ?\DateTimeInterface
    {
        return $this->datecreation;
    }

    public function setDatecreation(\DateTimeInterface $datecreation): static
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, TraitementReclamation>
     */
    public function getTraitementReclamations(): Collection
    {
        return $this->traitementReclamations;
    }

    public function addTraitementReclamation(TraitementReclamation $traitementReclamation): static
    {
        if (!$this->traitementReclamations->contains($traitementReclamation)) {
            $this->traitementReclamations->add($traitementReclamation);
            $traitementReclamation->setTraitements($this);
        }

        return $this;
    }

    public function removeTraitementReclamation(TraitementReclamation $traitementReclamation): static
    {
        if ($this->traitementReclamations->removeElement($traitementReclamation)) {
            // set the owning side to null (unless already changed)
            if ($traitementReclamation->getTraitements() === $this) {
                $traitementReclamation->setTraitements(null);
            }
        }

        return $this;
    }
}
