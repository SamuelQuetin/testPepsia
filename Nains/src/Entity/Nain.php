<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NainRepository")
 */
class Nain
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
     * @ORM\Column(type="integer")
     */
    private $taille;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Mine", inversedBy="id_mine")
     */
    private $id_mine;

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

    public function getTaille(): ?int
    {
        return $this->taille;
    }

    public function setTaille(int $taille): self
    {
        $this->taille = $taille;

        return $this;
    }


    public function getIdMine()
    {
        return $this->id_mine;
    }

    public function setIdMine($id_mine): void
    {
        $this->id_mine = $id_mine;
    }


}
