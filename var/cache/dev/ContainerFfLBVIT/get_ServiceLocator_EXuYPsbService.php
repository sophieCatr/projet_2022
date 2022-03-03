<?php

namespace ContainerFfLBVIT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EXuYPsbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EXuYPsb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EXuYPsb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'panier' => ['privates', 'App\\Classe\\Cart', 'getCartService', true],
        ], [
            'panier' => 'App\\Classe\\Cart',
        ]);
    }
}