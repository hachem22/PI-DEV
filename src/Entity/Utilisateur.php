<?php

namespace App\Entity;

use App\Enum\UtilisateurRole;
use App\Enum\MedecinSpecialite;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le prénom est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Le prénom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le prénom ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $Prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "Veuillez entrer une adresse email valide.")]
    private ?string $Email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "L'adresse est obligatoire.")]
    #[Assert\Length(
        min: 5,
        max: 255,
        minMessage: "L'adresse doit contenir au moins {{ limit }} caractères.",
        maxMessage: "L'adresse ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $Adress = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Le numéro de téléphone est obligatoire.")]
    #[Assert\Regex(
        pattern: "/^\d{8}$/",
        message: "Le numéro de téléphone doit contenir exactement 8 chiffres."
    )]
    private ?int $Tel = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\Length(
        max: 100,
        maxMessage: "Le grade ne doit pas dépasser {{ limit }} caractères."
    )]
    private ?string $Grade = null;

    #[ORM\Column(enumType: UtilisateurRole::class)]
    #[Assert\NotBlank(message: "Le rôle utilisateur est obligatoire.")]
    private ?UtilisateurRole $utilisateurRole = null;

    #[ORM\Column(enumType: MedecinSpecialite::class, nullable: true)]
    private ?MedecinSpecialite $medecinSpecilaite = null;

    #[ORM\ManyToOne(inversedBy: 'ListeUtilisateur')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Service $service = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $password = null;

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

    public function setMedecinSpecilaite(?MedecinSpecialite $medecinSpecilaite): static
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Returns the identifier used for authentication (e.g., email).
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->Email;
    }

    /**
     * Returns the roles granted to the user.
     * For now, we'll just return a default role.
     *
     * @return string[]
     */
    public function getRoles(): array
    {
        // Return a default role for all users (ignored in authentication)
        return ['ROLE_USER'];
    }

    /**
     * Removes sensitive data from the user.
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
    }
}