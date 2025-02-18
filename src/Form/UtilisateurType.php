<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Enum\UtilisateurRole;
use App\Enum\MedecinSpecialite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('Email')
            ->add('Adress')
            ->add('Tel')
            ->add('Grade')
            ->add('utilisateurRole', ChoiceType::class, [
                'choices' => array_combine(
                    array_map(fn($role) => $role->value, UtilisateurRole::cases()),
                    UtilisateurRole::cases()
                ),
                'choice_label' => fn($choice) => $choice->value,
                'choice_value' => fn(?UtilisateurRole $role) => $role ? $role->value : null,
            ])
            ->add('medecinSpecilaite', ChoiceType::class, [
                'choices' => array_combine(
                    array_map(fn($specialite) => $specialite->value, MedecinSpecialite::cases()),
                    MedecinSpecialite::cases()
                ),
                'choice_label' => fn($choice) => $choice->value,
                'choice_value' => fn(?MedecinSpecialite $specialite) => $specialite ? $specialite->value : null,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
