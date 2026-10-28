<?php

namespace App\Entity;

use App\Repository\GroupementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GroupementRepository::class)]
class Groupement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $Member = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMember(): ?string
    {
        return $this->Member;
    }

    public function setMember(string $Member): static
    {
        $this->Member = $Member;

        return $this;
    }
}
