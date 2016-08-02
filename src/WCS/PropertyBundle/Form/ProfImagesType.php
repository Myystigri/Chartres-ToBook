<?php

namespace WCS\PropertyBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfImagesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('primDefaut')
            ->remove('primOrd')
            ->remove('primExt')
            ->remove('primNom')
            ->remove('primXy')
            ->remove('primImgUrl')
            ->remove('primProfId')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WCS\PropertyBundle\Entity\ProfImages'
        ));
    }
}
