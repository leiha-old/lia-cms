<?php

namespace Lia\Cms\UserBundle;

use Lia\KernelBundle\Bundle\BundleBase;

class LiaCmsUserBundle
    extends BundleBase
{
    public function getAlias()
    {
        return 'cms.user';
    }

    public function getParent()
    {
        return "FOSUserBundle";
    }


}
