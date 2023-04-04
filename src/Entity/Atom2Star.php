<?php

namespace App\Entity;

use App\Repository\Atom2StarRepository;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\StarRepository;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\UniqueConstraint;
//use Doctrine\ORM\Mapping\Id;
//use Doctrine\ORM\Mapping\Column;

/**
 * @ORM\Entity(repositoryClass=Atom2StarRepository::class)
 */
class Atom2Star
{
    /**
     * @ORM\OneToOne(targetEntity=Star::class, inversedBy="atom2Star", cascade={"persist", "remove"}, )
     * @ORM\JoinColumn(nullable=false, unique=true)
     */
    private $star_id;

    /**
     * @ORM\Id @ORM\Column(type="integer")
     * @ORM\JoinColumn(nullable=false, unique=true)
     */
    private $atom_id;

    public function getStarId(): ?Star
    {
        return $this->star_id;
    }

    public function setStarId(Star $star_id): self
    {
        $this->star_id = $star_id;

        return $this;
    }

    public function getAtomId(): ?int
    {
        return $this->atom_id;
    }

    public function setAtomId(int $atom_id): self
    {
        $this->atom_id = $atom_id;

        return $this;
    }
}
