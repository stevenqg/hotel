<?php

namespace ControlBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ClientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class)
            ->add('lastname', TextType::class)
            ->add('identificationType', ChoiceType::class,  array('choices' => array('CC'=>'CC', 'TI'=>'TI', 'CE'=>'CE', 'PASSPORT'=>'PASSPORT'), 'placeholder' => 'select an id type'))
            ->add('identificationNumber', TextType::class)
            ->add('phone', IntegerType::class)
            ->add('cellphone', TextType::class)
            ->add('address', TextType::class)
            ->add('birthDate', DateTimeType::class)
            ->add('save', SubmitType::class, array('label' => 'save client'))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ControlBundle\Entity\Client'
        ));
    }
}
