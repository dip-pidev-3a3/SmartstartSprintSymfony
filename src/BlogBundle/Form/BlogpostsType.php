<?php

namespace BlogBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class BlogpostsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('postContent')->add('postType', ChoiceType::class, array(
            'choices'  => array(
                'Newsjacking' => "NewsjackingPost",
                'Instructional' => "InstructionalPost",
                'Personal Spotlight' => "PersonalSpotlightPost",
                'Cheat Sheet' => "CheatSheetPost",
                'Media' => "MediaPost",
                'Entertaining' => "Entertaining",
            )))->add('image',FileType::class,array('label'=>'inserer une imamge'))
            ->add('articleTitle')->add('articleContent',null,array('attr' =>array('class' =>'ckeditor')));
    }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Blogposts'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_blogposts';
    }


}
