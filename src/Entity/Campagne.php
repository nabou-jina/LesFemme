<?php

namespace App\Entity;

use App\Repository\CampagneRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CampagneRepository::class)]
class Campagne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $Groupement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGroupement(): ?string
    {
        return $this->Groupement;
    }

    public function setGroupement(string $Groupement): static
    {
        $this->Groupement = $Groupement;

        return $this;
    }
}
