<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ChoiceRepository")
 */
class Choice
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="array")
     */
    private $Choices = [];

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Question")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Question_ID;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChoices(): ?array
    {
        return $this->Choices;
    }

    public function setChoices(array $Choices): self
    {
        $this->Choices = $Choices;

        return $this;
    }

    public function getQuestionID(): ?Question
    {
        return $this->Question_ID;
    }

    public function setQuestionID(?Question $Question_ID): self
    {
        $this->Question_ID = $Question_ID;

        return $this;
    }
}
