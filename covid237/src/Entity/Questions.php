<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questions
 *
 * @ORM\Table(name="questions", uniqueConstraints={@ORM\UniqueConstraint(name="SymptomeId", columns={"SymptomeId"}), @ORM\UniqueConstraint(name="QuestionId", columns={"QuestionId"})}, indexes={@ORM\Index(name="IX_Questions_SymptomeId", columns={"SymptomeId"})})
 * @ORM\Entity(repositoryClass="App\Repository\QuestionsRepository")
 */
class Questions
{
    /**
     * @var string
     *
     * @ORM\Column(name="QuestionId", type="string", length=64, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $questionid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Libelle", type="text", length=0, nullable=true)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="Points", type="integer", nullable=false)
     */
    private $points;

    /**
     * @var string
     *
     * @ORM\Column(name="SymptomeId", type="string", length=64, nullable=false)
     */
    private $symptomeid;

    public function getQuestionid(): ?string
    {
        return $this->questionid;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getPoints(): ?int
    {
        return $this->points;
    }

    public function setPoints(int $points): self
    {
        $this->points = $points;

        return $this;
    }

    public function getSymptomeid(): ?string
    {
        return $this->symptomeid;
    }

    public function setSymptomeid(string $symptomeid): self
    {
        $this->symptomeid = $symptomeid;

        return $this;
    }


}
