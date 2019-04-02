<?php

namespace ComplaintsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ComplaintsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('mailUser')->add('subject', ChoiceType::class, array(
            'choices'  => array(
                'Fake opportunity' => "Fake opportunity",
                'Verbal abuse' => "Verbal abuse",
                'High price opportunity' => "High price opportunity",
                'Others' => "Others",
            )))->add('content')->add('addedDate')->add('idUser')->add('idOpp');
    }/**
     * {@inheritdoc}
     */

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Complaints'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_complaints';
    }


}
