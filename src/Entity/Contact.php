<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact{

    /**
     * @var string|null
     * @Assert\NotBlank(message="Ce champs ne peut être vide.")
     * @Assert\Length(min=2, max=100, minMessage="Le texte saisi est trop petit. Il doit contenir au minimum 2 caractères")
     */
    private $name;

    /**
     * @var string|null
     * @Assert\NotBlank(message="Le champs email ne peut rester vide.")
     * @Assert\Email(
     *     message = "le mail '{{ value }}' n'est pas un mail valide.",
     *     checkMX = true
     * )
     */
    private $mail;

    /**
     * @var string|null
     * @Assert\NotBlank(message="Ce champs ne peut être vide.")
     * @Assert\Length(min=4, max=150, minMessage="Le texte saisi est trop petit. Il doit contenir au minimum 4 caractères")
     */
    private $subject;

    /**
     * @var string|null
     * @Assert\NotBlank(message="Ce champs ne peut être vide.")
     * @Assert\Length(min=10, minMessage="Le texte saisi est trop petit. Il doit contenir au minimum 10 caractères")
     */
    private $message;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @param string|null $mail
     */
    public function setMail(?string $mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     */
    public function setSubject(?string $subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }


}