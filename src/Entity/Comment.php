<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 1500, nullable: true)]
    private ?string $Content = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column]
    private ?int $Id_user = null;

    #[ORM\Column]
    private ?int $Id_Post = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(?string $Content): static
    {
        $this->Content = $Content;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getIdUser(): ?int
    {
        return $this->Id_user;
    }

    public function setIdUser(int $Id_user): static
    {
        $this->Id_user = $Id_user;

        return $this;
    }

    public function getIdPost(): ?int
    {
        return $this->Id_Post;
    }

    public function setIdPost(int $Id_Post): static
    {
        $this->Id_Post = $Id_Post;

        return $this;
    }
}
