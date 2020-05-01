<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patientrole
 *
 * @ORM\Table(name="patientrole", uniqueConstraints={@ORM\UniqueConstraint(name="UserId", columns={"UserId"}), @ORM\UniqueConstraint(name="RoleId", columns={"RoleId"})}, indexes={@ORM\Index(name="IX_PatientRole_RoleId", columns={"RoleId"})})
 * @ORM\Entity(repositoryClass="App\Repository\PatientroleRepository")
 */
class Patientrole
{
    /**
     * @var string
     *
     * @ORM\Column(name="UserId", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="RoleId", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $roleid;

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function getRoleid(): ?string
    {
        return $this->roleid;
    }


}
