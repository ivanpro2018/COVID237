<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Symptomes
 *
 * @ORM\Table(name="symptomes", uniqueConstraints={@ORM\UniqueConstraint(name="Id", columns={"Id"})})
 * @ORM\Entity(repositoryClass="App\Repository\SymptomesRepository")
 */
class Symptomes
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Libelle", type="text", length=0, nullable=true)
     */
    private $libelle;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }


}
