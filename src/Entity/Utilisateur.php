<?php

// src/Entity/Utilisateur.php
namespace App\Entity;

use App\Enum\UtilisateurRole;
use App\Enum\MedecinSpecialite;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;


#[ORM\Entity(repositoryClass: UtilisateurRepository::class)]
class Utilisateur implements UserInterface,PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;


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

    #[ORM\Column(length: 255, unique: true)]
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
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Le service est obligatoire.")]
    private ?Service $service = null;

    // Getters and Setters...

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password, UserPasswordHasherInterface $passwordHasher): void
    {
        $this->password = $passwordHasher->hashPassword($this, $password);
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

    // UserInterface methods
    public function getRoles(): array
    {
        // Return the roles of the user
        // Can be an array like ['ROLE_USER', 'ROLE_ADMIN'] based on the `utilisateurRole` value
        return [$this->utilisateurRole->value];  // Assuming UtilisateurRole is an Enum
    }

    public function getSalt(): ?string
    {
        // Symfony uses bcrypt/argon2 by default, so you don't need to implement this method.
        return null;
    }

    public function getUserIdentifier(): string
    {
        return $this->Email; // Return email as the unique user identifier
    }

    public function eraseCredentials()
    {
        // If you store sensitive data in your entity, clear it here
    }
}

