<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Role
 *
 * @ORM\Table(name="role", uniqueConstraints={@ORM\UniqueConstraint(name="RoleNameIndex", columns={"NormalizedName"}), @ORM\UniqueConstraint(name="Id", columns={"Id"})})
 * @ORM\Entity(repositoryClass="App\Repository\RoleRepository")
 */
class Role
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
     * @ORM\Column(name="Name", type="string", length=125, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NormalizedName", type="string", length=125, nullable=true)
     */
    private $normalizedname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ConcurrencyStamp", type="text", length=0, nullable=true)
     */
    private $concurrencystamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Description", type="text", length=0, nullable=true)
     */
    private $description;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNormalizedname(): ?string
    {
        return $this->normalizedname;
    }

    public function setNormalizedname(?string $normalizedname): self
    {
        $this->normalizedname = $normalizedname;

        return $this;
    }

    public function getConcurrencystamp(): ?string
    {
        return $this->concurrencystamp;
    }

    public function setConcurrencystamp(?string $concurrencystamp): self
    {
        $this->concurrencystamp = $concurrencystamp;

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


}
