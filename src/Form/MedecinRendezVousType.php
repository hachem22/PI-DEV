<?php

namespace App\Form;
use App\Enum\NomService;

use App\Entity\RendezVous;
use App\Entity\Service;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedecinRendezVousType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $services = $options['services']; // Liste des services passée en paramètre

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
            ->add('medecin', EntityType::class, [
                'class' => Utilisateur::class,
                'choice_label' => 'nom',
                'choice_value' => 'id',
                'placeholder' => 'Sélectionnez un service d\'abord',
                'attr' => ['class' => 'select-medecin'],
                'required' => true,
            ])
            ->add('rendezVousStatus', ChoiceType::class, [
                'choices' => [
                    'En attente' => 'En attente',
                    'Confirmé' => 'Confirme',
                    'Annulé' => 'Annulé',
                ],
                'label' => 'Statut du rendez-vous',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RendezVous::class,
            'services' => [], // Liste des services à passer en option
        ]);
    }
}
