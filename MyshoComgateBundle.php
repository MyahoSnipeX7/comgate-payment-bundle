<?php

namespace Mysho\ComgateBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Mysho\ComgateBundle\DependencyInjection\MyshoComgateExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

class MyshoComgateBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new MyshoComgateExtension();
    }
}
