<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medecins
 *
 * @ORM\Table(name="medecins", uniqueConstraints={@ORM\UniqueConstraint(name="Id", columns={"Id"})})
 * @ORM\Entity(repositoryClass="App\Repository\MedecinsRepository")
 */
class Medecins
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
     * @ORM\Column(name="UserName", type="text", length=0, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NormalizedUserName", type="text", length=0, nullable=true)
     */
    private $normalizedusername;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="text", length=0, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NormalizedEmail", type="text", length=0, nullable=true)
     */
    private $normalizedemail;

    /**
     * @var bool
     *
     * @ORM\Column(name="EmailConfirmed", type="boolean", nullable=false)
     */
    private $emailconfirmed;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PasswordHash", type="text", length=0, nullable=true)
     */
    private $passwordhash;

    /**
     * @var string|null
     *
     * @ORM\Column(name="SecurityStamp", type="text", length=0, nullable=true)
     */
    private $securitystamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ConcurrencyStamp", type="text", length=0, nullable=true)
     */
    private $concurrencystamp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PhoneNumber", type="text", length=0, nullable=true)
     */
    private $phonenumber;

    /**
     * @var bool
     *
     * @ORM\Column(name="PhoneNumberConfirmed", type="boolean", nullable=false)
     */
    private $phonenumberconfirmed;

    /**
     * @var bool
     *
     * @ORM\Column(name="TwoFactorEnabled", type="boolean", nullable=false)
     */
    private $twofactorenabled;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="LockoutEnd", type="datetime", nullable=true)
     */
    private $lockoutend;

    /**
     * @var bool
     *
     * @ORM\Column(name="LockoutEnabled", type="boolean", nullable=false)
     */
    private $lockoutenabled;

    /**
     * @var int
     *
     * @ORM\Column(name="AccessFailedCount", type="integer", nullable=false)
     */
    private $accessfailedcount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Specialisation", type="text", length=0, nullable=true)
     */
    private $specialisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Hospital", type="text", length=0, nullable=true)
     */
    private $hospital;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Fonction", type="text", length=0, nullable=true)
     */
    private $fonction;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getNormalizedusername(): ?string
    {
        return $this->normalizedusername;
    }

    public function setNormalizedusername(?string $normalizedusername): self
    {
        $this->normalizedusername = $normalizedusername;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getNormalizedemail(): ?string
    {
        return $this->normalizedemail;
    }

    public function setNormalizedemail(?string $normalizedemail): self
    {
        $this->normalizedemail = $normalizedemail;

        return $this;
    }

    public function getEmailconfirmed(): ?bool
    {
        return $this->emailconfirmed;
    }

    public function setEmailconfirmed(bool $emailconfirmed): self
    {
        $this->emailconfirmed = $emailconfirmed;

        return $this;
    }

    public function getPasswordhash(): ?string
    {
        return $this->passwordhash;
    }

    public function setPasswordhash(?string $passwordhash): self
    {
        $this->passwordhash = $passwordhash;

        return $this;
    }

    public function getSecuritystamp(): ?string
    {
        return $this->securitystamp;
    }

    public function setSecuritystamp(?string $securitystamp): self
    {
        $this->securitystamp = $securitystamp;

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

    public function getPhonenumber(): ?string
    {
        return $this->phonenumber;
    }

    public function setPhonenumber(?string $phonenumber): self
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    public function getPhonenumberconfirmed(): ?bool
    {
        return $this->phonenumberconfirmed;
    }

    public function setPhonenumberconfirmed(bool $phonenumberconfirmed): self
    {
        $this->phonenumberconfirmed = $phonenumberconfirmed;

        return $this;
    }

    public function getTwofactorenabled(): ?bool
    {
        return $this->twofactorenabled;
    }

    public function setTwofactorenabled(bool $twofactorenabled): self
    {
        $this->twofactorenabled = $twofactorenabled;

        return $this;
    }

    public function getLockoutend(): ?\DateTimeInterface
    {
        return $this->lockoutend;
    }

    public function setLockoutend(?\DateTimeInterface $lockoutend): self
    {
        $this->lockoutend = $lockoutend;

        return $this;
    }

    public function getLockoutenabled(): ?bool
    {
        return $this->lockoutenabled;
    }

    public function setLockoutenabled(bool $lockoutenabled): self
    {
        $this->lockoutenabled = $lockoutenabled;

        return $this;
    }

    public function getAccessfailedcount(): ?int
    {
        return $this->accessfailedcount;
    }

    public function setAccessfailedcount(int $accessfailedcount): self
    {
        $this->accessfailedcount = $accessfailedcount;

        return $this;
    }

    public function getSpecialisation(): ?string
    {
        return $this->specialisation;
    }

    public function setSpecialisation(?string $specialisation): self
    {
        $this->specialisation = $specialisation;

        return $this;
    }

    public function getHospital(): ?string
    {
        return $this->hospital;
    }

    public function setHospital(?string $hospital): self
    {
        $this->hospital = $hospital;

        return $this;
    }

    public function getFonction(): ?string
    {
        return $this->fonction;
    }

    public function setFonction(?string $fonction): self
    {
        $this->fonction = $fonction;

        return $this;
    }


}
