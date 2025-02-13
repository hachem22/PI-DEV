<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, [
                'label' => 'Nom de la formation',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Entrez le nom de la formation'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le nom de la formation ne peut pas être vide.',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s]+$/u',
                        'message' => 'Le nom doit contenir uniquement des lettres et des espaces.',
                    ]),
                ],
            ])
            ->add('Description', TextType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Ajoutez une description'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'La description ne peut pas être vide.',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s]+$/u',
                        'message' => 'La description ne doit contenir que des lettres et des espaces.',
                    ]),
                ],
            ])
            ->add('Type', TextType::class, [
                'label' => 'Type de formation',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Entrez le type de formation'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le type de formation est obligatoire.',
                    ]),
                    new Regex([
                        'pattern' => '/^[a-zA-ZÀ-ÿ\s]+$/u',
                        'message' => 'Le type doit contenir uniquement des lettres et des espaces.',
                    ]),
                ],
            ])
            ->add('Date', DateTimeType::class, [
                'label' => 'Date de la formation',
                'widget' => 'single_text',
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'La date est obligatoire.',
                    ]),
                    new GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'La date doit être aujourd\'hui ou plus tard.',
                    ]),
                ],
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Enregistrer',
                'attr' => ['class' => 'btn btn-success'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
