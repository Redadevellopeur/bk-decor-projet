<?php

namespace App\Entity;

use App\Repository\AddressRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AddressRepository::class)
 */
class Address
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @ORM\Column(type="integer")
     */
    private $cityCode;

    /**
     * @ORM\OneToMany(targetEntity=TypeHome::class, mappedBy="address")
     */
    private $typeHome;

    public function __construct()
    {
        $this->typeHome = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCityCode(): ?int
    {
        return $this->cityCode;
    }

    public function setCityCode(int $cityCode): self
    {
        $this->cityCode = $cityCode;

        return $this;
    }

    /**
     * @return Collection|TypeHome[]
     */
    public function getTypeHome(): Collection
    {
        return $this->typeHome;
    }

    public function addTypeHome(TypeHome $typeHome): self
    {
        if (!$this->typeHome->contains($typeHome)) {
            $this->typeHome[] = $typeHome;
            $typeHome->setAddress($this);
        }

        return $this;
    }

    public function removeTypeHome(TypeHome $typeHome): self
    {
        if ($this->typeHome->removeElement($typeHome)) {
            // set the owning side to null (unless already changed)
            if ($typeHome->getAddress() === $this) {
                $typeHome->setAddress(null);
            }
        }

        return $this;
    }
}
