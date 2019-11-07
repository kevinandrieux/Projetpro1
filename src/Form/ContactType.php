<?php
declare(strict_types=1);

/* Le code de cette page fut réalisé par Bruno Prédot - 11/2019
created by Prédot Bruno - 11/2019 */

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
//use YuzuWebAgency\RecaptchaBundle\Type\RecaptchaSubmitType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class,[
                'required' =>false,
            ])
            ->add('mail', TextType::class,[
                'required' =>false,
            ])
            ->add('subject', TextType::class,[
                'required' =>false,
            ])
            ->add('message', TextareaType::class,[
                'required' =>false,
            ])
            //->add('captcha', RecaptchaSubmitType::class, [
                //'label' => 'Envoyer',
                //'block_name' => 'captcha'
            //])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class
        ]);
    }
}
