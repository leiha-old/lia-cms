<?php

namespace Lia\Cms\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class GroupType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add($this->buildGroup1($builder))
            //->add($this->buildGroup2($builder))
        ;
    }


    private function buildGroup1(FormBuilderInterface $builder){
        return $builder->create('group1', 'form' , array('virtual' => true))
            ->add('name', 'text',
                array('label'    => 'form.group_name', 'translation_domain' => 'FOSUserBundle')

            );

    }

    private function buildGroup2(FormBuilderInterface $builder){

    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lia\Cms\UserBundle\Entity\Group'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lia_cms_form_group';
    }
}
