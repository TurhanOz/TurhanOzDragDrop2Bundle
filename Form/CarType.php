<?php

namespace TurhanOz\DragDrop2Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('mechanicalParts')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TurhanOz\DragDrop2Bundle\Entity\Car'
        ));
    }

    public function getName()
    {
        return 'turhanoz_dragdrop2bundle_cartype';
    }
}
