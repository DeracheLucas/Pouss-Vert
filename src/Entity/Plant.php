<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Plant
 *
 * @ORM\Table(name="plant", indexes={@ORM\Index(name="plant_cold_resistance", columns={"cold_resistance"}), @ORM\Index(name="plant_water_needs", columns={"water_needs"}), @ORM\Index(name="plant_category", columns={"category"}), @ORM\Index(name="plant_maintenance", columns={"maintenance"})})
 * @ORM\Entity(repositoryClass="App\Repository\PlantRepository")
 */
class Plant
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
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="sowing_month_start", type="integer", nullable=false)
     */
    private $sowingMonthStart;

    /**
     * @var int
     *
     * @ORM\Column(name="sowing_month_end", type="integer", nullable=false)
     */
    private $sowingMonthEnd;

    /**
     * @var int
     *
     * @ORM\Column(name="harvest_month_start", type="integer", nullable=false)
     */
    private $harvestMonthStart;

    /**
     * @var int
     *
     * @ORM\Column(name="harvest_month_end", type="integer", nullable=false)
     */
    private $harvestMonthEnd;

    /**
     * @var int
     *
     * @ORM\Column(name="transplanting_month_start", type="integer", nullable=false)
     */
    private $transplantingMonthStart;

    /**
     * @var int
     *
     * @ORM\Column(name="transplanting_month_end", type="integer", nullable=false)
     */
    private $transplantingMonthEnd;

    /**
     * @var string
     *
     * @ORM\Column(name="spacing", type="string", length=255, nullable=false)
     */
    private $spacing;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", length=65535, nullable=false)
     */
    private $image;

    /**
     * @var \Category
     *
     * @ORM\ManyToOne(targetEntity="Category")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="category", referencedColumnName="id")
     * })
     */
    private $category;

    /**
     * @var \ColdResistance
     *
     * @ORM\ManyToOne(targetEntity="ColdResistance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cold_resistance", referencedColumnName="id")
     * })
     */
    private $coldResistance;

    /**
     * @var \Maintenance
     *
     * @ORM\ManyToOne(targetEntity="Maintenance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="maintenance", referencedColumnName="id")
     * })
     */
    private $maintenance;

    /**
     * @var \WaterNeeds
     *
     * @ORM\ManyToOne(targetEntity="WaterNeeds")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="water_needs", referencedColumnName="id")
     * })
     */
    private $waterNeeds;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Ground", mappedBy="plant")
     */
    private $ground;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GroundMoisture", inversedBy="plant")
     * @ORM\JoinTable(name="plant_ground_moisture",
     *   joinColumns={
     *     @ORM\JoinColumn(name="plant_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ground_moisture_id", referencedColumnName="id")
     *   }
     * )
     */
    private $groundMoisture;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GroundPh", inversedBy="plant")
     * @ORM\JoinTable(name="plant_ground_ph",
     *   joinColumns={
     *     @ORM\JoinColumn(name="plant_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ground_ph_id", referencedColumnName="id")
     *   }
     * )
     */
    private $groundPh;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="GroundType", inversedBy="plant")
     * @ORM\JoinTable(name="plant_ground_type",
     *   joinColumns={
     *     @ORM\JoinColumn(name="plant_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ground_type_id", referencedColumnName="id")
     *   }
     * )
     */
    private $groundType;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SunExposure", inversedBy="plant")
     * @ORM\JoinTable(name="plant_sun_exposure",
     *   joinColumns={
     *     @ORM\JoinColumn(name="plant_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="sun_exposure_id", referencedColumnName="id")
     *   }
     * )
     */
    private $sunExposure;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ground = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groundMoisture = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groundPh = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groundType = new \Doctrine\Common\Collections\ArrayCollection();
        $this->sunExposure = new \Doctrine\Common\Collections\ArrayCollection();
    }

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

    public function getSowingMonthStart(): ?int
    {
        return $this->sowingMonthStart;
    }

    public function setSowingMonthStart(int $sowingMonthStart): self
    {
        $this->sowingMonthStart = $sowingMonthStart;

        return $this;
    }

    public function getSowingMonthEnd(): ?int
    {
        return $this->sowingMonthEnd;
    }

    public function setSowingMonthEnd(int $sowingMonthEnd): self
    {
        $this->sowingMonthEnd = $sowingMonthEnd;

        return $this;
    }

    public function getHarvestMonthStart(): ?int
    {
        return $this->harvestMonthStart;
    }

    public function setHarvestMonthStart(int $harvestMonthStart): self
    {
        $this->harvestMonthStart = $harvestMonthStart;

        return $this;
    }

    public function getHarvestMonthEnd(): ?int
    {
        return $this->harvestMonthEnd;
    }

    public function setHarvestMonthEnd(int $harvestMonthEnd): self
    {
        $this->harvestMonthEnd = $harvestMonthEnd;

        return $this;
    }

    public function getTransplantingMonthStart(): ?int
    {
        return $this->transplantingMonthStart;
    }

    public function setTransplantingMonthStart(int $transplantingMonthStart): self
    {
        $this->transplantingMonthStart = $transplantingMonthStart;

        return $this;
    }

    public function getTransplantingMonthEnd(): ?int
    {
        return $this->transplantingMonthEnd;
    }

    public function setTransplantingMonthEnd(int $transplantingMonthEnd): self
    {
        $this->transplantingMonthEnd = $transplantingMonthEnd;

        return $this;
    }

    public function getSpacing(): ?string
    {
        return $this->spacing;
    }

    public function setSpacing(string $spacing): self
    {
        $this->spacing = $spacing;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getColdResistance(): ?ColdResistance
    {
        return $this->coldResistance;
    }

    public function setColdResistance(?ColdResistance $coldResistance): self
    {
        $this->coldResistance = $coldResistance;

        return $this;
    }

    public function getMaintenance(): ?Maintenance
    {
        return $this->maintenance;
    }

    public function setMaintenance(?Maintenance $maintenance): self
    {
        $this->maintenance = $maintenance;

        return $this;
    }

    public function getWaterNeeds(): ?WaterNeeds
    {
        return $this->waterNeeds;
    }

    public function setWaterNeeds(?WaterNeeds $waterNeeds): self
    {
        $this->waterNeeds = $waterNeeds;

        return $this;
    }

    /**
     * @return Collection|Ground[]
     */
    public function getGround(): Collection
    {
        return $this->ground;
    }

    public function addGround(Ground $ground): self
    {
        if (!$this->ground->contains($ground)) {
            $this->ground[] = $ground;
            $ground->addPlant($this);
        }

        return $this;
    }

    public function removeGround(Ground $ground): self
    {
        if ($this->ground->removeElement($ground)) {
            $ground->removePlant($this);
        }

        return $this;
    }

    /**
     * @return Collection|GroundMoisture[]
     */
    public function getGroundMoisture(): Collection
    {
        return $this->groundMoisture;
    }

    public function addGroundMoisture(GroundMoisture $groundMoisture): self
    {
        if (!$this->groundMoisture->contains($groundMoisture)) {
            $this->groundMoisture[] = $groundMoisture;
        }

        return $this;
    }

    public function removeGroundMoisture(GroundMoisture $groundMoisture): self
    {
        $this->groundMoisture->removeElement($groundMoisture);

        return $this;
    }

    /**
     * @return Collection|GroundPh[]
     */
    public function getGroundPh(): Collection
    {
        return $this->groundPh;
    }

    public function addGroundPh(GroundPh $groundPh): self
    {
        if (!$this->groundPh->contains($groundPh)) {
            $this->groundPh[] = $groundPh;
        }

        return $this;
    }

    public function removeGroundPh(GroundPh $groundPh): self
    {
        $this->groundPh->removeElement($groundPh);

        return $this;
    }

    /**
     * @return Collection|GroundType[]
     */
    public function getGroundType(): Collection
    {
        return $this->groundType;
    }

    public function addGroundType(GroundType $groundType): self
    {
        if (!$this->groundType->contains($groundType)) {
            $this->groundType[] = $groundType;
        }

        return $this;
    }

    public function removeGroundType(GroundType $groundType): self
    {
        $this->groundType->removeElement($groundType);

        return $this;
    }

    /**
     * @return Collection|SunExposure[]
     */
    public function getSunExposure(): Collection
    {
        return $this->sunExposure;
    }

    public function addSunExposure(SunExposure $sunExposure): self
    {
        if (!$this->sunExposure->contains($sunExposure)) {
            $this->sunExposure[] = $sunExposure;
        }

        return $this;
    }

    public function removeSunExposure(SunExposure $sunExposure): self
    {
        $this->sunExposure->removeElement($sunExposure);

        return $this;
    }
}
