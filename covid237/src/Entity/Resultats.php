<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultats
 *
 * @ORM\Table(name="resultats", uniqueConstraints={@ORM\UniqueConstraint(name="PatientId", columns={"PatientId"}), @ORM\UniqueConstraint(name="IX_Resultats_PatientId", columns={"PatientId"}), @ORM\UniqueConstraint(name="Id", columns={"Id"}), @ORM\UniqueConstraint(name="InterpretationId", columns={"InterpretationId"})}, indexes={@ORM\Index(name="IX_Resultats_InterpretationId", columns={"InterpretationId"})})
 * @ORM\Entity(repositoryClass="App\Repository\ResultatsRepository")
 */
class Resultats
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
     * @var int
     *
     * @ORM\Column(name="TotalPoints", type="integer", nullable=false)
     */
    private $totalpoints;

    /**
     * @var string
     *
     * @ORM\Column(name="PatientId", type="string", length=64, nullable=false)
     */
    private $patientid;

    /**
     * @var string
     *
     * @ORM\Column(name="InterpretationId", type="string", length=64, nullable=false)
     */
    private $interpretationid;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getTotalpoints(): ?int
    {
        return $this->totalpoints;
    }

    public function setTotalpoints(int $totalpoints): self
    {
        $this->totalpoints = $totalpoints;

        return $this;
    }

    public function getPatientid(): ?string
    {
        return $this->patientid;
    }

    public function setPatientid(string $patientid): self
    {
        $this->patientid = $patientid;

        return $this;
    }

    public function getInterpretationid(): ?string
    {
        return $this->interpretationid;
    }

    public function setInterpretationid(string $interpretationid): self
    {
        $this->interpretationid = $interpretationid;

        return $this;
    }


}
