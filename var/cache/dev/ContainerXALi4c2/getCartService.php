<?php

namespace ContainerXALi4c2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Classe\Cart' shared autowired service.
     *
     * @return \App\Classe\Cart
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Classe/Cart.php';

        return $container->privates['App\\Classe\\Cart'] = new \App\Classe\Cart(($container->services['.container.private.session'] ?? $container->load('get_Container_Private_SessionService')));
    }
}
