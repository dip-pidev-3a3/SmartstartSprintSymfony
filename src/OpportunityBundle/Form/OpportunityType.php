<?php

namespace OpportunityBundle\Form;



use Symfony\Component\Form\AbstractType;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Validator\Constraints\Date;

class OpportunityType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('jobTitle',TextType::class)->add('jobCategory')->add('jobDescription' ,TextareaType::class, array(
        'attr' => array('maxlength' => 500)))->add('budget',IntegerType::class, array('scale' => 1, 'attr' => array('min'=>0,'step' => 0.01)))->add('jobDuration',IntegerType::class,array( 'attr' => array('min'=>0,'step'=>1)))->add('expiryDate',DateType::class,array("widget"=>"single_text","format"=>"yyyy-MM-dd"));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Opportunity'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_opportunity';
    }


}
