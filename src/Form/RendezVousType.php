<?php

// RendezVousType.php
namespace App\Form;

use App\Entity\RendezVous;
use App\Entity\Utilisateur; // Importez l'entité Utilisateur
use App\Enum\RendezVousStatus;
use Symfony\Bridge\Doctrine\Form\Type\EntityType; // Utilisez EntityType
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class RendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $services = $options['services']; // Récupérez les services depuis les options

        $builder
            ->add('date', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date du rendez-vous'
            ])
            ->add('heure', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Heure du rendez-vous'
            ])
            ->add('service', ChoiceType::class, [
                'choices' => $services,
                'choice_label' => function ($service) {
                    return $service->getNom()->value; // Utilisez la valeur de l'enum
                },
                'choice_value' => 'id',
                'placeholder' => 'Sélectionnez un service',
            ])
            ->add('medecin', EntityType::class, [ // Utilisez EntityType pour le médecin
                'class' => Utilisateur::class, // Spécifiez l'entité Utilisateur
                'placeholder' => 'Sélectionnez un service d\'abord',
                'attr' => ['class' => 'select-medecin'],
                'choice_value' => 'id',
                'choice_label' => 'nom',
                'invalid_message' => 'Le médecin sélectionné est invalide.',
                'required' => true, // Assurez-vous que le champ est requis
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
            'services' => [], // Déclarez l'option 'services' avec une valeur par défaut vide
        ]);
    }
}