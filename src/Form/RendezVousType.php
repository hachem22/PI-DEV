<?php

// RendezVousType.php
namespace App\Form;

use App\Entity\RendezVous;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class RendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $services = $options['services'];

        $builder
        ->add('service', ChoiceType::class, [
            'choices' => $services,
            'choice_label' => function ($service) {
                return $service->getNom()->value; // Accéder à la valeur de l'Enum
            },
            'choice_value' => 'id',
            'placeholder' => 'Sélectionnez un service',
            'attr' => ['class' => 'form-select'],
        ])
            ->add('medecin', EntityType::class, [
                'class' => Utilisateur::class,
                'placeholder' => 'Sélectionnez un service d\'abord',
                'attr' => ['class' => 'select-medecin'],
                'choice_value' => 'id',
                'choice_label' => 'nom',
                'invalid_message' => 'Le médecin sélectionné est invalide.',
                'required' => true,
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date',
                'required' => true,
                'attr' => ['class' => 'select-date'],
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
            'services' => [],
        ]);
    }
    

 
}