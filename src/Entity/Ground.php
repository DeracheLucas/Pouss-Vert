<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ground
 *
 * @ORM\Table(name="ground", indexes={@ORM\Index(name="ground_user", columns={"user"}), @ORM\Index(name="ground_ground_type", columns={"ground_type"})})
 * @ORM\Entity(repositoryClass="App\Repository\GroundRepository")
 */
class Ground
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
     * @var int
     *
     * @ORM\Column(name="width", type="integer", nullable=false)
     */
    private $width;

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="integer", nullable=false)
     */
    private $height;

    /**
     * @var \GroundType
     *
     * @ORM\ManyToOne(targetEntity="GroundType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ground_type", referencedColumnName="id")
     * })
     */
    private $groundType;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Plant", inversedBy="ground")
     * @ORM\JoinTable(name="ground_plant",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ground_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="plant_id", referencedColumnName="id")
     *   }
     * )
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

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getGroundType(): ?GroundType
    {
        return $this->groundType;
    }

    public function setGroundType(?GroundType $groundType): self
    {
        $this->groundType = $groundType;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

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
        }

        return $this;
    }

    public function removePlant(Plant $plant): self
    {
        $this->plant->removeElement($plant);

        return $this;
    }
}
