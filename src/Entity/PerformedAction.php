<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PerformedAction
 *
 * @ORM\Table(name="performed_action", indexes={@ORM\Index(name="performed_action_plant", columns={"plant"}), @ORM\Index(name="performed_action_user", columns={"user"}), @ORM\Index(name="performed_action_action", columns={"action"})})
 * @ORM\Entity(repositoryClass="App\Repository\PerformedActionRepository")
 */
class PerformedAction
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \Action
     *
     * @ORM\ManyToOne(targetEntity="Action")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="action", referencedColumnName="id")
     * })
     */
    private $action;

    /**
     * @var \Plant
     *
     * @ORM\ManyToOne(targetEntity="Plant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="plant", referencedColumnName="id")
     * })
     */
    private $plant;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id")
     * })
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAction(): ?Action
    {
        return $this->action;
    }

    public function setAction(?Action $action): self
    {
        $this->action = $action;

        return $this;
    }

    public function getPlant(): ?Plant
    {
        return $this->plant;
    }

    public function setPlant(?Plant $plant): self
    {
        $this->plant = $plant;

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
}
