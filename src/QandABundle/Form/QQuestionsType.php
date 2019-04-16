<?php

namespace QandABundle\Form;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Tests\Extension\Core\Type\TextTypeTest;
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
            ->add('description', CKEditorType::class,
                array('config' => array('toolbar' => 'full'),))
            ->add('subject', ChoiceType::class, [
                'choices'  => [
                    'sumfony' => 'Sumfony', 'java' => 'Java',
                    'c#' => 'C#','Angular'=>'angular', 'mysql'=>'Mysql'
                ],
            ])
            ->add('Add',SubmitType::class, array('attr'=>array('class'=>'btn3 flex-c-m size31 txt11 trans-0-4')));
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
