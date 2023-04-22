<?php

namespace ContainerTvmpbG0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CjLvgM8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CjLvgM8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CjLvgM8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annonce' => ['privates', '.errored..service_locator.CjLvgM8.App\\Entity\\Annonces', NULL, 'Cannot autowire service ".service_locator.CjLvgM8": it references class "App\\Entity\\Annonces" but no such service exists.'],
            'annoncesRepository' => ['privates', 'App\\Repository\\AnnoncesRepository', 'getAnnoncesRepositoryService', true],
        ], [
            'annonce' => 'App\\Entity\\Annonces',
            'annoncesRepository' => 'App\\Repository\\AnnoncesRepository',
        ]);
    }
}
