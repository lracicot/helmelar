<?php

namespace Helmelar\PlayerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GuildType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('guildName')
            ->add('guildStatus')
            ->add('helmGodId')
            ->add('helmCultId')
            ->add('helmAlignId')
            ->add('guildPrivBg')
            ->add('guildPubBg')
            ->add('guildGoal')
            ->add('guildCreation')
            ->add('guildNote')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Helmelar\PlayerBundle\Entity\Guild'
        ));
    }

    public function getName()
    {
        return 'helmelar_playerbundle_guildtype';
    }
}
