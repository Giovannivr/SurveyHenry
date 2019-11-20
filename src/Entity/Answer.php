<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AnswerRepository")
 */
class Answer
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
     * @ORM\ManyToOne(targetEntity="App\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $User_ID;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Question")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Question_ID;

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

    public function getUserID(): ?User
    {
        return $this->User_ID;
    }

    public function setUserID(?User $User_ID): self
    {
        $this->User_ID = $User_ID;

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
