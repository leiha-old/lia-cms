<?php

namespace Lia\Cms\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add($this->buildGroup1($builder))
            ->add($this->buildGroup2($builder))
        ;
    }


    private function buildGroup1(FormBuilderInterface $builder){
        return $builder->create('group1', 'form' , array('virtual' => true))
            ->add('email'        , 'email', array('label' => 'form.email'    , 'translation_domain' => 'FOSUserBundle'))
            ->add('username'     , null   , array('label' => 'form.username' , 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', 'repeated', array(
                'type'              => 'password',
                'options'           => array('translation_domain' => 'FOSUserBundle'),
                'first_options'     => array('label' => 'form.password'),
                'second_options'    => array('label' => 'form.password_confirmation'),
                'invalid_message'   => 'fos_user.password.mismatch',
            ));
    }

    private function buildGroup2(FormBuilderInterface $builder){
        return $builder->create('group2', 'form' , array('virtual' => true))
            ->add('groups', 'genemu_jqueryselect2_entity', array(
                'class'    => 'LiaCmsUserBundle:Group',
                'property' => 'name',
                "multiple" => true
            ));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lia\Cms\UserBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lia_cms_form_user';
    }
}
