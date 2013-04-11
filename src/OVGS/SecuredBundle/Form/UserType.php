<?php

namespace OVGS\SecuredBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('firstName')
            ->add('lastName')
            ->add('userName')
            ->add('email')
            ->add('salt')
            ->add('password')
            ->add('isActive')
            ->add('lastLogin')
            ->add('createdAt')
            ->add('modifiedAt')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'OVGS\SecuredBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'ovgs_securedbundle_usertype';
    }
}
