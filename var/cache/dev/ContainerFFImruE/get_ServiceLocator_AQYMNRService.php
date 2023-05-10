<?php

namespace ContainerFFImruE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AQYMNRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A_QYMNR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A_QYMNR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reclamation' => ['privates', '.errored..service_locator.A_QYMNR.App\\Entity\\Reclamations', NULL, 'Cannot autowire service ".service_locator.A_QYMNR": it references class "App\\Entity\\Reclamations" but no such service exists.'],
            'reclamationsRepository' => ['privates', 'App\\Repository\\ReclamationsRepository', 'getReclamationsRepositoryService', true],
        ], [
            'reclamation' => 'App\\Entity\\Reclamations',
            'reclamationsRepository' => 'App\\Repository\\ReclamationsRepository',
        ]);
    }
}
