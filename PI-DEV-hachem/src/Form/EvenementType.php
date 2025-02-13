<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, [
                'label' => 'Nom de l\'événement',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Entrez le nom de l\'événement'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom de l\'événement ne peut pas être vide.',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s]+$/u', // Accepte uniquement des lettres et des espaces (avec accents)
                        'message' => 'Le nom de l\'événement doit contenir uniquement des lettres alphabétiques.'
                    ])
                ]
            ])
            ->add('Description', TextType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ajoutez une description'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'La description ne peut pas être vide.',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s]+$/u', // Seules les lettres et espaces autorisés
                        'message' => 'La description ne doit contenir que des lettres alphabétiques et des espaces.'
                    ])
                ]
            ])
            ->add('Capacite', IntegerType::class, [
                'label' => 'Capacité',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ajoutez une capacité'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'La capacité est obligatoire.',
                    ]),
                    new GreaterThanOrEqual([
                        'value' => 0, // Ne permet pas les valeurs négatives
                        'message' => 'La capacité ne peut pas être négative.'
                    ]),
                    new LessThanOrEqual([
                        'value' => 20, // Limite la capacité à 20 maximum
                        'message' => 'La capacité ne peut pas dépasser 20.'
                    ])
                ]
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => ['class' => 'btn btn-success']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
