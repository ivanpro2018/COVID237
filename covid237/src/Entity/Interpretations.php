<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Interpretations
 *
 * @ORM\Table(name="interpretations", uniqueConstraints={@ORM\UniqueConstraint(name="InterpretationId", columns={"InterpretationId"})})
 * @ORM\Entity(repositoryClass="App\Repository\InterpretationsRepository")
 */
class Interpretations
{
    /**
     * @var string
     *
     * @ORM\Column(name="InterpretationId", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $interpretationid;

    /**
     * @var int
     *
     * @ORM\Column(name="PointMin", type="integer", nullable=false)
     */
    private $pointmin;

    /**
     * @var int
     *
     * @ORM\Column(name="PointMax", type="integer", nullable=false)
     */
    private $pointmax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Libelle", type="text", length=0, nullable=true)
     */
    private $libelle;

    public function getInterpretationid(): ?string
    {
        return $this->interpretationid;
    }

    public function getPointmin(): ?int
    {
        return $this->pointmin;
    }

    public function setPointmin(int $pointmin): self
    {
        $this->pointmin = $pointmin;

        return $this;
    }

    public function getPointmax(): ?int
    {
        return $this->pointmax;
    }

    public function setPointmax(int $pointmax): self
    {
        $this->pointmax = $pointmax;

        return $this;
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
