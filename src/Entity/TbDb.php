<?php

namespace App\Entity;

use App\Repository\TbDbRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TbDbRepository::class)]
class TbDb
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}
