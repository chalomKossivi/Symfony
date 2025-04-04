<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Id_user = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Username = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(?string $Username): static
    {
        $this->Username = $Username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }
}
