<?php

namespace Hr\EmployeeBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class EmployeeType
 *
 * @package Hr\EmployeeBundle\Form\Type
 */
class EmployeeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('surname', 'text')
            ->add('save', 'submit', array('label' => 'Create Employee'));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'employee';
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'data_class' => 'Hr\EmployeeBundle\Entity\Employee',
            ));
    }
}
