<?php

namespace App\Form;

use App\Entity\Message;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;


class MessageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('content', TextareaType::class, [
                'label' => 'Message',
                'attr' => ['class' => 'form-control']
            ])
            ->add('author', EntityType::class, [
                'class' => 'App\Entity\Blog',
                'choice_label' => 'title', // Display blog title in dropdown
                'attr' => ['class' => 'form-control'],
                'required' => true
            ])
            ->add('content', TextareaType::class, [
                'label' => 'Your Message',
                'attr' => ['class' => 'form-control', 'rows' => 4],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Message cannot be empty']),
                    new Assert\Length(['min' => 5, 'minMessage' => 'Message must be at least 5 characters']),
                ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}

