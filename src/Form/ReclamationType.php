<?php

namespace App\Form;



use App\Entity\Reclamation;
use App\Enum\ReclamationStatut;
use App\Enum\ReclamationType as ReclamationTypeEnum;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control', 'rows' => 4],
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de réclamation',
                'choices' => array_combine(
    array_map(fn($type) => $type->value, ReclamationTypeEnum::cases()), 
    ReclamationTypeEnum::cases()
),

                'attr' => ['class' => 'form-select']
            ])
            
           
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom',
                'label' => 'Catégorie',
                'attr' => ['class' => 'form-select']
            ]);
           
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }

}