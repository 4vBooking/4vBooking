<?php

namespace App\Entity;

use App\Repository\BungalowRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BungalowRepository::class)]
class Bungalow
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_zona = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column]
    private ?int $people_cantity = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdZona(): ?int
    {
        return $this->id_zona;
    }

    public function setIdZona(int $id_zona): self
    {
        $this->id_zona = $id_zona;

        return $this;
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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPeopleCantity(): ?int
    {
        return $this->people_cantity;
    }

    public function setPeopleCantity(int $people_cantity): self
    {
        $this->people_cantity = $people_cantity;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
    
    public function __construct($id_zona, $title,$price,$people_cantity,$description,$image)
    {
        $this->id_zona = $id_zona;
        $this->title = $title;
        $this->price = $price;
        $this->people_cantity = $people_cantity;
        $this->description = $description;
        $this->image = $image;
        
    }
}
