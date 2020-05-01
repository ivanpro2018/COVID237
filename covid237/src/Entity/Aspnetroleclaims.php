<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspnetroleclaims
 *
 * @ORM\Table(name="aspnetroleclaims", uniqueConstraints={@ORM\UniqueConstraint(name="RoleId", columns={"RoleId"})}, indexes={@ORM\Index(name="IX_AspNetRoleClaims_RoleId", columns={"RoleId"})})
 * @ORM\Entity(repositoryClass="App\Repository\AspnetroleclaimsRepository")
 */
class Aspnetroleclaims
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="RoleId", type="string", length=64, nullable=false)
     */
    private $roleid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ClaimType", type="text", length=0, nullable=true)
     */
    private $claimtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ClaimValue", type="text", length=0, nullable=true)
     */
    private $claimvalue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoleid(): ?string
    {
        return $this->roleid;
    }

    public function setRoleid(string $roleid): self
    {
        $this->roleid = $roleid;

        return $this;
    }

    public function getClaimtype(): ?string
    {
        return $this->claimtype;
    }

    public function setClaimtype(?string $claimtype): self
    {
        $this->claimtype = $claimtype;

        return $this;
    }

    public function getClaimvalue(): ?string
    {
        return $this->claimvalue;
    }

    public function setClaimvalue(?string $claimvalue): self
    {
        $this->claimvalue = $claimvalue;

        return $this;
    }


}
