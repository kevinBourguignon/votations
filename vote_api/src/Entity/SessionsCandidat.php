<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\SessionsCandidatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SessionsCandidatRepository::class)]
#[ApiResource]
class SessionsCandidat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'candidat')]
    private ?Candidat $candidat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCandidat(): ?Candidat
    {
        return $this->candidat;
    }

    public function setCandidat(?Candidat $candidat): static
    {
        $this->candidat = $candidat;

        return $this;
    }
}
