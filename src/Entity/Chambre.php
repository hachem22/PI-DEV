<?php

namespace App\Entity;

use App\Enum\Activechambre;
use App\Repository\ChambreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use PhpParser\Node\Expr\Cast\String_;
use symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ChambreRepository::class)]
class Chambre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min : 3, max : 5)]
    private ?string $num = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $localisation = null;

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\Column(type: 'string', length: 50)]
    private ?string $active = null;

    /**
     * @var Collection<int, EntretientChambre>
     */
    #[ORM\OneToMany(targetEntity: EntretientChambre::class, mappedBy: 'chambre')]
    private Collection $entretient;

    /**
     * @var Collection<int, Lit>
     */
    #[ORM\OneToMany(targetEntity: Lit::class, mappedBy: 'chambre')]
    private Collection $lits;

    public function __construct()
    {
        $this->entretient = new ArrayCollection();
        $this->lits = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNum(): ?string
    {
        return $this->num;
    }

    public function setNum(string $num): static
    {
        $this->num = $num;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getActive(): ?string
    {
        return $this->active;
    }

    
   
    public function setActive(?string $active): self
    {
        $this->active = $active;
        return $this;
    
    }
    /**
     * @return Collection<int, EntretientChambre>
     */
    public function getEntretient(): Collection
    {
        return $this->entretient;
    }

    public function addEntretient(EntretientChambre $entretient): static
    {
        if (!$this->entretient->contains($entretient)) {
            $this->entretient->add($entretient);
            $entretient->setChambre($this);
        }

        return $this;
    }

    public function removeEntretient(EntretientChambre $entretient): static
    {
        if ($this->entretient->removeElement($entretient)) {
            // set the owning side to null (unless already changed)
            if ($entretient->getChambre() === $this) {
                $entretient->setChambre(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Lit>
     */
    public function getLits(): Collection
    {
        return $this->lits;
    }

    public function addLit(Lit $lit): static
    {
        if (!$this->lits->contains($lit)) {
            $this->lits->add($lit);
            $lit->setChambre($this);
        }

        return $this;
    }

    public function removeLit(Lit $lit): static
    {
        if ($this->lits->removeElement($lit)) {
            // set the owning side to null (unless already changed)
            if ($lit->getChambre() === $this) {
                $lit->setChambre(null);
            }
        }

        return $this;
    }
}
