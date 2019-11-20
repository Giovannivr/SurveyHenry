<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Survey")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Survey_ID;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Type_ID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getSurveyID(): ?Survey
    {
        return $this->Survey_ID;
    }

    public function setSurveyID(?Survey $Survey_ID): self
    {
        $this->Survey_ID = $Survey_ID;

        return $this;
    }

    public function getTypeID(): ?Category
    {
        return $this->Type_ID;
    }

    public function setTypeID(?Category $Type_ID): self
    {
        $this->Type_ID = $Type_ID;

        return $this;
    }
}
