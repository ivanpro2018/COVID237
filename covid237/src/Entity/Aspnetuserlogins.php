<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspnetuserlogins
 *
 * @ORM\Table(name="aspnetuserlogins", uniqueConstraints={@ORM\UniqueConstraint(name="UserId", columns={"UserId"})}, indexes={@ORM\Index(name="IX_AspNetUserLogins_UserId", columns={"UserId"})})
 * @ORM\Entity(repositoryClass="App\Repository\AspnetuserloginsRepository")
 */
class Aspnetuserlogins
{
    /**
     * @var string
     *
     * @ORM\Column(name="LoginProvider", type="string", length=125, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $loginprovider;

    /**
     * @var string
     *
     * @ORM\Column(name="ProviderKey", type="string", length=125, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $providerkey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ProviderDisplayName", type="text", length=0, nullable=true)
     */
    private $providerdisplayname;

    /**
     * @var string
     *
     * @ORM\Column(name="UserId", type="string", length=64, nullable=false)
     */
    private $userid;

    public function getLoginprovider(): ?string
    {
        return $this->loginprovider;
    }

    public function getProviderkey(): ?string
    {
        return $this->providerkey;
    }

    public function getProviderdisplayname(): ?string
    {
        return $this->providerdisplayname;
    }

    public function setProviderdisplayname(?string $providerdisplayname): self
    {
        $this->providerdisplayname = $providerdisplayname;

        return $this;
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


}
