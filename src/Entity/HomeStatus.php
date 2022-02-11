<?php

namespace App\Entity;

use App\Repository\HomeStatusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomeStatusRepository::class)
 */
class HomeStatus
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
    private $status;

    /**
     * @ORM\OneToMany(targetEntity=TypeHome::class, mappedBy="homeStatus")
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

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
            $typeHome->setHomeStatus($this);
        }

        return $this;
    }

    public function removeTypeHome(TypeHome $typeHome): self
    {
        if ($this->typeHome->removeElement($typeHome)) {
            // set the owning side to null (unless already changed)
            if ($typeHome->getHomeStatus() === $this) {
                $typeHome->setHomeStatus(null);
            }
        }

        return $this;
    }
}
