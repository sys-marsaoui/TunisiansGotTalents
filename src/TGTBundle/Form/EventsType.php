<?php

namespace TGTBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titreEvents')
            ->add('descriptionEvents')
            ->add('themeEvents')
            ->add('adresseEvents')
            ->add('dateEvents')
            ->add('prixEvents')
            ->add('imageEvents',FileType::class,array('label'=>'Veuillez selectionner votre photo','data_class'=>null))
            ->add('Valider',SubmitType::class);
            //->add('Organisation_id');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TGTBundle\Entity\Events'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tgtbundle_events';
    }


}
