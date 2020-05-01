<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patients
 *
 * @ORM\Table(name="patients", uniqueConstraints={@ORM\UniqueConstraint(name="UserNameIndex", columns={"NormalizedUserName"}), @ORM\UniqueConstraint(name="Id", columns={"Id"})}, indexes={@ORM\Index(name="EmailIndex", columns={"NormalizedEmail"})})
 * @ORM\Entity(repositoryClass="App\Repository\PatientsRepository")
 */
class Patients
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
     * @ORM\Column(name="UserName", type="string", length=125, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NormalizedUserName", type="string", length=125, nullable=true)
     */
    private $normalizedusername;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Email", type="string", length=125, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NormalizedEmail", type="string", length=125, nullable=true)
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
     * @var int
     *
     * @ORM\Column(name="Age", type="integer", nullable=false)
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="Gender", type="integer", nullable=false)
     */
    private $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Address_StreetAddress", type="text", length=0, nullable=true)
     */
    private $addressStreetaddress;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Address_City", type="text", length=0, nullable=true)
     */
    private $addressCity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PhotoPath", type="text", length=0, nullable=true)
     */
    private $photopath;

    /**
     * @var string
     *
     * @ORM\Column(name="ContactUrgence", type="text", length=0, nullable=false)
     */
    private $contacturgence;

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

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getGender(): ?int
    {
        return $this->gender;
    }

    public function setGender(int $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getAddressStreetaddress(): ?string
    {
        return $this->addressStreetaddress;
    }

    public function setAddressStreetaddress(?string $addressStreetaddress): self
    {
        $this->addressStreetaddress = $addressStreetaddress;

        return $this;
    }

    public function getAddressCity(): ?string
    {
        return $this->addressCity;
    }

    public function setAddressCity(?string $addressCity): self
    {
        $this->addressCity = $addressCity;

        return $this;
    }

    public function getPhotopath(): ?string
    {
        return $this->photopath;
    }

    public function setPhotopath(?string $photopath): self
    {
        $this->photopath = $photopath;

        return $this;
    }

    public function getContacturgence(): ?string
    {
        return $this->contacturgence;
    }

    public function setContacturgence(string $contacturgence): self
    {
        $this->contacturgence = $contacturgence;

        return $this;
    }


}
