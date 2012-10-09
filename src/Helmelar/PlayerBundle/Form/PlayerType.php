<?php

namespace Helmelar\PlayerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('userId')
            ->add('playerBirthdate')
            ->add('playerCreationDate')
            ->add('playerHin')
            ->add('playerSickness')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Helmelar\PlayerBundle\Entity\Player'
        ));
    }

    public function getName()
    {
        return 'helmelar_playerbundle_playertype';
    }
}
