<?php

namespace App\Entity;

use App\Repository\TypeWorkRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TypeWorkRepository::class)
 */
class TypeWork
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
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imageName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $slug;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $updateAt;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="typeWorks")
     */
    private $category;

    /**
     * @ORM\OneToMany(targetEntity=TypeCoating::class, mappedBy="typeWork")
     */
    private $typeCoatings;

    public function __construct()
    {
        $this->typeCoatings = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeImmutable
    {
        return $this->updateAt;
    }

    public function setUpdateAt(?\DateTimeImmutable $updateAt): self
    {
        $this->updateAt = $updateAt;

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

    /**
     * @return Collection|TypeCoating[]
     */
    public function getTypeCoatings(): Collection
    {
        return $this->typeCoatings;
    }

    public function addTypeCoating(TypeCoating $typeCoating): self
    {
        if (!$this->typeCoatings->contains($typeCoating)) {
            $this->typeCoatings[] = $typeCoating;
            $typeCoating->setTypeWork($this);
        }

        return $this;
    }

    public function removeTypeCoating(TypeCoating $typeCoating): self
    {
        if ($this->typeCoatings->removeElement($typeCoating)) {
            // set the owning side to null (unless already changed)
            if ($typeCoating->getTypeWork() === $this) {
                $typeCoating->setTypeWork(null);
            }
        }

        return $this;
    }
}
