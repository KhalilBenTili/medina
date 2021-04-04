<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistrationType extends AbstractType
{
  
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('prenomuser',null, array('label' => 'prenom'))
            ->add('nomuser',null, array('label' => 'nom'))
            ->add('datenaissuser', null, array('label' => 'Date de naissance'))
            ->add('teluser', null, array('label' => 'Numero'))
            ->add('roles', ChoiceType::class, array('label' => 'Type',
                'choices' => array(' PRO' => 'ROLE_PRO', 'CLIENT' => 'ROLE_CLIENT', 'FREELANCER' => 'ROLE_FREELANCER'),
                'required' => true, 'multiple' => true,))
        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }



    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
        

    }

    public function getBlockPrefix()
    {
        return 'user_bundle_registration_type';
    }


}
