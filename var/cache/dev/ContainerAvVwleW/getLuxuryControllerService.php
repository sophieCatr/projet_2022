<?php

namespace ContainerAvVwleW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLuxuryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LuxuryController' shared autowired service.
     *
     * @return \App\Controller\LuxuryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LuxuryController.php';

        $container->services['App\\Controller\\LuxuryController'] = $instance = new \App\Controller\LuxuryController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\LuxuryController', $container));

        return $instance;
    }
}
