<?php

namespace App\Form;

use App\Entity\Utilisateur;
use App\Enum\UtilisateurRole;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PatientForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
            ])
            ->add('Prenom', TextType::class, [
                'label' => 'Prénom',
                'required' => true,
            ])
            ->add('Email', EmailType::class, [
                'label' => 'Email',
                'required' => true,
            ])
            ->add('Adress', TextType::class, [
                'label' => 'Adresse',
                'required' => true,
            ])
            ->add('Tel', IntegerType::class, [
                'label' => 'Téléphone',
                'required' => true,
            ])
            ->add('password', PasswordType::class, [
                'label' => 'Mot de passe',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            // Set the default role to 'Patient'
            'role' => UtilisateurRole::Patient,
        ]);
    }
}