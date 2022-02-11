<?php

namespace App\Entity;

use App\Repository\TypeHomeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeHomeRepository::class)
 */
class TypeHome
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
    private $type;

    /**
     * @ORM\Column(type="integer")
     */
    private $numberRooms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeRooms;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $surface;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $etatRoom;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="typeHomes")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Devis::class, mappedBy="typeHome")
     */
    private $devis;

    /**
     * @ORM\ManyToOne(targetEntity=Address::class, inversedBy="typeHome")
     */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity=HomeStatus::class, inversedBy="typeHome")
     */
    private $homeStatus;

    public function __construct()
    {
        $this->devis = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getNumberRooms(): ?int
    {
        return $this->numberRooms;
    }

    public function setNumberRooms(int $numberRooms): self
    {
        $this->numberRooms = $numberRooms;

        return $this;
    }

    public function getTypeRooms(): ?string
    {
        return $this->typeRooms;
    }

    public function setTypeRooms(string $typeRooms): self
    {
        $this->typeRooms = $typeRooms;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(?int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getEtatRoom(): ?string
    {
        return $this->etatRoom;
    }

    public function setEtatRoom(?string $etatRoom): self
    {
        $this->etatRoom = $etatRoom;

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
     * @return Collection|Devis[]
     */
    public function getDevis(): Collection
    {
        return $this->devis;
    }

    public function addDevi(Devis $devi): self
    {
        if (!$this->devis->contains($devi)) {
            $this->devis[] = $devi;
            $devi->setTypeHome($this);
        }

        return $this;
    }

    public function removeDevi(Devis $devi): self
    {
        if ($this->devis->removeElement($devi)) {
            // set the owning side to null (unless already changed)
            if ($devi->getTypeHome() === $this) {
                $devi->setTypeHome(null);
            }
        }

        return $this;
    }

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getHomeStatus(): ?HomeStatus
    {
        return $this->homeStatus;
    }

    public function setHomeStatus(?HomeStatus $homeStatus): self
    {
        $this->homeStatus = $homeStatus;

        return $this;
    }
}
