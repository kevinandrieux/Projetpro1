<?php
namespace App\Notification;

use App\Entity\Contact;
use Twig\Environment;

class ContactNotification{

    /**
     * @var \Swift_Mailer
     */
    private $swift_Mailer;
    /**
     * @var Environment
     */
    private $renderer;

    // add swif_mailer & environment services
    public function __construct(\Swift_Mailer $swift_Mailer, Environment $renderer)
    {

        $this->swift_Mailer = $swift_Mailer;
        $this->renderer = $renderer;
    }

    /**
     * @param Contact $contact
     */
    public function notify(Contact $contact){

        $message = (new \Swift_Message('Contact via le formulaire de la Fédération du Mémorial de l\'OTAN.'))
            //setters
            ->setFrom('noreply@federation.fr')
            ->setTo('fmo.nato.contact@gmail.com')## federation mail, receiver
            ->setReplyTo($contact->getMail())## the contact email sender by form

            ->setBody('
            Sujet du message : 
            ' . // 1
                $contact->getSubject() .
            '            
            Contenu du message :             
            ' .
                // 2
                $contact->getMessage());

        $this->swift_Mailer->send($message);
    }
}