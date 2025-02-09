<?php

namespace App\Entity;

use App\Enum\NomService;
use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

  

    /**
     * @var Collection<int, Utilisateur>
     */
    #[ORM\OneToMany(targetEntity: Utilisateur::class, mappedBy: 'service')]
    private Collection $utilisateurs;

    #[ORM\Column(type: 'string',enumType: NomService::class)]
    private ?NomService $Nom = null;

    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

   

    /**
     * @return Collection<int, Utilisateur>
     */
    public function getListeUtilisateur(): Collection
    {
        return $this->utilisateurs;
    }

    public function addListeUtilisateur(Utilisateur $utilisateurs): static
    {
        if (!$this->utilisateurs->contains($utilisateurs)) {
            $this->utilisateurs->add($utilisateurs);
            $utilisateurs->setService($this);
        }

        return $this;
    }

    public function removeListeUtilisateur(Utilisateur $utilisateurs): static
    {
        if ($this->utilisateurs->removeElement($utilisateurs)) {
            // set the owning side to null (unless already changed)
            if ($utilisateurs->getService() === $this) {
                $utilisateurs->setService(null);
            }
        }

        return $this;
    }

    public function getNom(): ?NomService
    {
        return $this->Nom;
    }

    public function setNom(NomService $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }
    

}
