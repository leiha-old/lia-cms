<?php

namespace Lia\Cms\CoreBundle\Controller;

use Lia\KernelBundle\Controller\ControllerBase;

class HomeController
    extends ControllerBase
{
    /**
     * @param bool $blockOnly
     * @param array $vars
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function homeAction($blockOnly=false, array $vars=array())
    {
        return $this->renderByUserGrant(
            '@LiaCmsCoreBundle/Resources/views/Home/home'
            , $blockOnly
            , $vars
        );
    }
}