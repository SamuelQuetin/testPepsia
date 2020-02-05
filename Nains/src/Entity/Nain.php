<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToOne;

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
     * @ORM\ManyToOne(targetEntity="App\Entity\Mine")
     * @JoinTable(name="mine",
     *      joinColumns={@JoinColumn(name="mine", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="id", referencedColumnName="mine", unique=true)}
     *      )
     */
    private $mine;
    private $em;

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


    public function getMine()
    {
        return $this->mine;
    }

    public function setMine($mine): void
    {
        $this->mine = $mine;
    }

//    public function getMineid()
//    {
//        return $this->mine_id;
//    }
//
//    public function setMineid($mine_id): void
//    {
//        $this->mine_id = $mine_id;
//    }
}
