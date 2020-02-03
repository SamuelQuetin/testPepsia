<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MineRepository")
 */
class Mine
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $nom;

    /**
     * @ORM\Column(type="float")
     */
    private $profondeur;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getProfondeur(): ?float
    {
        return $this->profondeur;
    }

    public function setProfondeur(float $profondeur): self
    {
        $this->profondeur = $profondeur;

        return $this;
    }
}
