<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HeureRendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $heuresDisponibles = $options['heuresDisponibles'] ?? [];
        
        $builder
            ->add('heure_selectionnee', ChoiceType::class, [
                'choices' => array_combine($heuresDisponibles, $heuresDisponibles),
                'label' => 'Heure disponible',
                'placeholder' => 'Sélectionnez une heure',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'heuresDisponibles' => [],
        ]);

        $resolver->setAllowedTypes('heuresDisponibles', 'array');
    }
}