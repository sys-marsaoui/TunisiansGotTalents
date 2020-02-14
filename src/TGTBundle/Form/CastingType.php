<?php

namespace TGTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CastingType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('Organisation_id')
            ->add('titreCasting')
            ->add('descriptionCasting')
            ->add('dateCasting')
            ->add('dateLP')
            ->add('adresseCasting')
            ->add('imageCasting',FileType::class,array('label'=>'Veuillez selectionner votre photo','data_class'=>null))
            ->add('Valider',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TGTBundle\Entity\Casting'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tgtbundle_casting';
    }


}
