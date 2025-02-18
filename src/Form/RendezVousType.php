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
            ->add('date', ChoiceType::class, [
                'choices' => $options['datesDisponibles'],
                'choice_label' => function ($date) {
                    return $date->format('Y-m-d'); // Format d'affichage
                },
                'choice_value' => function ($date) {
                    return $date ? $date->format('Y-m-d') : ''; // Format de valeur
                },
                'label' => 'Date Disponible',
                'placeholder' => 'Sélectionnez une date disponible',
                'required' => true,
                'attr' => ['class' => 'select-date'],
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
            'services' => [],
            'datesDisponibles' => [],
        ]);
    }
    private function getAvailableDates(?Utilisateur $medecin): array
{
    if (!$medecin) {
        return [];

    }

    $availableDates = []; // Récupérez ici les vraies dates disponibles pour ce médecin
    foreach ($medecin->getPlannings() as $planning) {
        $availableDates[$planning->getDateDisponible()->format('Y-m-d')] = $planning->getDateDisponible()->format('Y-m-d');
    }

    return $availableDates;
}

 
}