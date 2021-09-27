<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * GroundType
 *
 * @ORM\Table(name="ground_type")
 * @ORM\Entity(repositoryClass="App\Repository\GroundTypeRepository")
 */
class GroundType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Plant", mappedBy="groundType")
     */
    private $plant;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->plant = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return Collection|Plant[]
     */
    public function getPlant(): Collection
    {
        return $this->plant;
    }

    public function addPlant(Plant $plant): self
    {
        if (!$this->plant->contains($plant)) {
            $this->plant[] = $plant;
            $plant->addGroundType($this);
        }

        return $this;
    }

    public function removePlant(Plant $plant): self
    {
        if ($this->plant->removeElement($plant)) {
            $plant->removeGroundType($this);
        }

        return $this;
    }
}
