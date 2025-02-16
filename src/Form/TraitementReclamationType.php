<?php

namespace App\Form;

use App\Entity\TraitementReclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Enum\ReclamationStatut;


class TraitementReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('commentaire', TextareaType::class, [
                'label' => 'Commentaire'
            ])
            ->add('etat', ChoiceType::class, [
                'choices' => [
                    'En cours' => ReclamationStatut::EN_COURS,
                    'Résolue' => ReclamationStatut::RESOLUE,
                    'rejeté' => ReclamationStatut::REJETE,
                ],
                'choice_value' => fn (?ReclamationStatut $statut) => $statut?->value,
                'choice_label' => fn (ReclamationStatut $statut) => $statut->value,
            ])
            ->add('dateTraitement', DateTimeType::class, [
                'widget' => 'single_text',
                'label' => 'Date de traitement'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TraitementReclamation::class,
        ]);
    }
}
