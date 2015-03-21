<?php

namespace Lia\Cms\UserBundle\Controller;

use Lia\Kernel\CrudBundle\Controller\CrudController;
use Lia\Kernel\CrudBundle\DependencyInjection\CrudServiceConfiguration;
use Lia\Cms\UserBundle\Entity\User;

/**
 * User controller
 */
class UserController
    extends CrudController
{
    public function setConfiguration(CrudServiceConfiguration $config){
        $config
            ->setEntity  ('Lia\Cms\UserBundle\Entity\User')
            ->setFormType('Lia\Cms\UserBundle\Form\UserType')
            ->setRoutesPrefix('lia_user')
//            ->setRoutes([
//                'create'      => 'lia_user_create',
//                'edit'        => 'lia_user_edit',
//                'delete'      => 'lia_user_delete',
//                'show'        => 'lia_user_show',
//                'index'       => 'lia_user_index'
//            ])
        ;
    }
}