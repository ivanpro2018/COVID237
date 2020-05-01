<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspnetuserclaims
 *
 * @ORM\Table(name="aspnetuserclaims", uniqueConstraints={@ORM\UniqueConstraint(name="UserId", columns={"UserId"})}, indexes={@ORM\Index(name="IX_AspNetUserClaims_UserId", columns={"UserId"})})
 * @ORM\Entity(repositoryClass="App\Repository\AspnetuserclaimsRepository")
 */
class Aspnetuserclaims
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
     * @ORM\Column(name="UserId", type="string", length=64, nullable=false)
     */
    private $userid;

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

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

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
