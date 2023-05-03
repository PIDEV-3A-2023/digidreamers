<?php

namespace ContainerG7qtDks;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OEfCGgoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oEfCGgo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oEfCGgo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reclamation' => ['privates', '.errored..service_locator.oEfCGgo.App\\Entity\\Reclamations', NULL, 'Cannot autowire service ".service_locator.oEfCGgo": it references class "App\\Entity\\Reclamations" but no such service exists.'],
        ], [
            'reclamation' => 'App\\Entity\\Reclamations',
        ]);
    }
}
