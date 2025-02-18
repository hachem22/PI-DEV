<?php

namespace App\Form;

use App\Entity\Visite;
use App\Entity\RendezVous;
use App\Entity\DossierMedical;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VisiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateVisite', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de la visite',
                'attr' => ['class' => 'form-control']
            ])
            
            ->add('ordonnace', TextType::class, [
                'label' => 'Ordonnance',
                'attr' => ['class' => 'form-control']
            ])
            ->add('ceteficat', TextType::class, [
                'label' => 'Certificat',
                'attr' => ['class' => 'form-control']
            ])
            ->add('Rdv', EntityType::class, [
                'class' => RendezVous::class,
                'choice_label' => 'id', // Affiche l'ID du rendez-vous (modifiable selon ton besoin)
                'label' => 'Rendez-vous associé',
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Sélectionner un rendez-vous',
                'required' => false
            ])
            ->add('dossierMedical', EntityType::class, [
                'class' => DossierMedical::class,
                'choice_label' => 'id', // Affiche l'ID du dossier médical (modifiable selon ton besoin)
                'label' => 'Dossier Médical associé',
                'attr' => ['class' => 'form-control'],
                'placeholder' => 'Sélectionner un dossier médical',
                'required' => false
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Visite::class,
        ]);
    }
}
