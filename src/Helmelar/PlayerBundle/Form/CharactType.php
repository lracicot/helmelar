<?php

namespace Helmelar\PlayerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CharactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('playerId')
            ->add('charactName')
            ->add('charactTitle')
            ->add('charactLevel')
            ->add('charactPvTrunk')
            ->add('charactPvArms')
            ->add('charactPvLegs')
            ->add('charactFate')
            ->add('charactBonus')
            ->add('charactMalus')
            ->add('charactPrivBg')
            ->add('charactPubBg')
            ->add('charactGoal')
            ->add('charactMoney')
            ->add('charactStone')
            ->add('charactCreation')
            ->add('charactNotes')
            ->add('alignId')
            ->add('cultId')
            ->add('raceId')
            ->add('godId')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Helmelar\PlayerBundle\Entity\Charact'
        ));
    }

    public function getName()
    {
        return 'helmelar_playerbundle_characttype';
    }
}
