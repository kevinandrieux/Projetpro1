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
    }
}