<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Efmigrationshistory
 *
 * @ORM\Table(name="__efmigrationshistory")
 * @ORM\Entity(repositoryClass="App\Repository\EfmigrationshistoryRepository")
 */
class Efmigrationshistory
{
    /**
     * @var string
     *
     * @ORM\Column(name="MigrationId", type="string", length=150, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $migrationid;

    /**
     * @var string
     *
     * @ORM\Column(name="ProductVersion", type="string", length=32, nullable=false)
     */
    private $productversion;

    public function getMigrationid(): ?string
    {
        return $this->migrationid;
    }

    public function getProductversion(): ?string
    {
        return $this->productversion;
    }

    public function setProductversion(string $productversion): self
    {
        $this->productversion = $productversion;

        return $this;
    }


}
