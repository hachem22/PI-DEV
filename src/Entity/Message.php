<?php

namespace App\Entity;

use App\Enum\UtilisateurRole;
use App\Repository\MessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MessageRepository::class)]
class Message
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "text")]
    private ?string $content = null;

    /*#[ORM\ManyToOne(targetEntity: Blog::class)]
    #[ORM\JoinColumn(nullable: false)]
    private ?Blog $author = null; // Foreign key linking to Blog entity */


    #[ORM\ManyToOne(targetEntity: Utilisateur::class, inversedBy: "messages")]
    #[ORM\JoinColumn(nullable: false)]
    private ?UtilisateurRole $author = null;

    public function getAuthor(): ?UtilisateurRole
    {
        return $this->author;
    }

    public function setAuthor(?UtilisateurRole $author): self
    {
        $this->author = $author;
        return $this;
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;
        return $this;
    }

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $dateEnvoi = null;

    // Getter and Setter for dateEnvoi
    public function getDateEnvoi(): ?\DateTimeInterface
    {
        return $this->dateEnvoi;
    }

    public function setDateEnvoi(?\DateTimeInterface $dateEnvoi): self
    {
        $this->dateEnvoi = $dateEnvoi;
        return $this;
    }

    #[ORM\Column(type: 'string', length: 20, options: ["default" => "en_attente"])]
    private string $status = "en_attente";  // Default value: "en_attente"

    // Getters & Setters
    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
