<?php

namespace App\Entity;

use App\Repository\MemberRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MemberRepository::class)]
class Member
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $ModeCotisation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModeCotisation(): ?string
    {
        return $this->ModeCotisation;
    }

    public function setModeCotisation(string $ModeCotisation): static
    {
        $this->ModeCotisation = $ModeCotisation;

        return $this;
    }
}
