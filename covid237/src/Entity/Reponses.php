<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponses
 *
 * @ORM\Table(name="reponses", uniqueConstraints={@ORM\UniqueConstraint(name="PatientId", columns={"PatientId"}), @ORM\UniqueConstraint(name="QuestionId", columns={"QuestionId"})}, indexes={@ORM\Index(name="IX_Reponses_QuestionId", columns={"QuestionId"})})
 * @ORM\Entity(repositoryClass="App\Repository\ReponsesRepository")
 */
class Reponses
{
    /**
     * @var string
     *
     * @ORM\Column(name="PatientId", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $patientid;

    /**
     * @var string
     *
     * @ORM\Column(name="QuestionId", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $questionid;

    /**
     * @var int
     *
     * @ORM\Column(name="PointObtenu", type="integer", nullable=false)
     */
    private $pointobtenu;

    public function getPatientid(): ?string
    {
        return $this->patientid;
    }

    public function getQuestionid(): ?string
    {
        return $this->questionid;
    }

    public function getPointobtenu(): ?int
    {
        return $this->pointobtenu;
    }

    public function setPointobtenu(int $pointobtenu): self
    {
        $this->pointobtenu = $pointobtenu;

        return $this;
    }


}
