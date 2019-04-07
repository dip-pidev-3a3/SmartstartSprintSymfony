<?php

namespace QandABundle\Form;

use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class QCloudsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('img')
            ->add('file',FileType::class,array('label'=>'inserer une imamge'))
            ->add('video', CKEditorType::class, array(
                'config' => array(
                    'filebrowserBrowseRoute'           => 'my_route',
                    'filebrowserBrowseRouteParameters' => array('slug' => 'my-slug'),
                    'filebrowserBrowseRouteType'       => UrlGeneratorInterface::ABSOLUTE_URL,
                ),
            ))
            ->add('vocal');
        /*
         * $builder->add('img',imagecreatefrombmp())
            ->add('file',move_uploaded_file())
            ->add('video',ibase_blob_import())
            ->add('vocal',ibase_blob_import())
         * */
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\QClouds'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_qclouds';
    }


}
