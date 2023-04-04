<?php

namespace App\Entity;

use App\Repository\StarRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StarRepository::class)
 */
class Star
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $radius;

    /**
     * @ORM\Column(type="float")
     */
    private $temperature;

    /**
     * @ORM\ManyToOne(targetEntity=Galaxy::class, inversedBy="stars")
     * @ORM\JoinColumn(nullable=false)
     */
    private $galaxy;

    /**
     * @ORM\OneToOne(targetEntity=Atom2Star::class, mappedBy="star_id", cascade={"persist", "remove"})
     */
    private $atom2Star;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRadius(): ?float
    {
        return $this->radius;
    }

    public function setRadius(float $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    public function setTemperature(float $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getGalaxy(): ?Galaxy
    {
        return $this->galaxy;
    }

    public function setGalaxy(?Galaxy $galaxy): self
    {
        $this->galaxy = $galaxy;

        return $this;
    }

    public function getAtom2Star(): ?Atom2Star
    {
        return $this->atom2Star;
    }

    public function setAtom2Star(Atom2Star $atom2Star): self
    {
        $this->atom2Star = $atom2Star;

        // set the owning side of the relation if necessary
        if ($atom2Star->getStarId() !== $this) {
            $atom2Star->setStarId($this);
        }

        return $this;
    }
}
