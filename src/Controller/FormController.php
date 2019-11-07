<?php

namespace App\Controller;

use App\Form\FormContactType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function form()
    {
       $form = $this->createForm(FormContactType::class);
       return $this->render('contact/form.html.twig', [
       'form' => $form,
       'form' => $form->createView(),]);
        
        $form->handleRequest($request);

             if ($form->isSubmitted() && $form->isValid()){
                 /** @var  $contact */
                 $contactNotification->notify($contact);
                    $this-> addFlash('Success', 'Votre email a été envoyé');
                    return $this->redirectToRoute('contact');
                }
        return $this->render('contact', [
             'current_menu' => 'active',
             'contact' => $contact,
             'form' => $form->createView(),
            ]);
    }
}