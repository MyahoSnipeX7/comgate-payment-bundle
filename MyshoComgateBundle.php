<?php

namespace Mysho\ComgateBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Mysho\ComgateBundle\DependencyInjection\MyshoComgateExtension;

class MyshoComgateBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new MyshoComgateExtension();
    }
}
