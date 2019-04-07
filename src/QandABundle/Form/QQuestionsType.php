<?php

namespace QandABundle\Form;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QQuestionsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('question', CKEditorType::class, array(
        'config' => array('toolbar' => 'basic'),))
            ->add('description', CKEditorType::class, array(
                'config' => array('toolbar' => 'standard'),))
            ->add('subject')
         /*   ->add('idu', EntityType::class,
                array('class'=>'AppBundle\Entity\FosUser',
                    'choice_label'=>'id',
                    'multiple'=>false)) */
            ->add('Add',SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\QQuestions'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_qquestions';
    }


}
