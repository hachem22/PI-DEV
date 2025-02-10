<?php

namespace App\Form;

use App\Entity\Chambre;
use App\Enum\Activechambre; // Assurez-vous que cette classe d'énumération existe
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('num')
            ->add('type')
            ->add('localisation')
            ->add('capacite')
            
            ->add('active', ChoiceType::class, [
                'choices' => [
                    'Disponible' => 'disponible',
                    'Occupée' => 'occupee',
                    
                ],
                'placeholder' => 'Sélectionnez un état',
            ]);
          
            }
        

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
        ]);
    }
}
