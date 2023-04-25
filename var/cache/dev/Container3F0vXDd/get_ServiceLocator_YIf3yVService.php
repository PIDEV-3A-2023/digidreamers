<?php

namespace Container3F0vXDd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YIf3yVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._yIf3yV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._yIf3yV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'registry' => ['services', 'doctrine', 'getDoctrineService', false],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'paginator' => '?',
            'registry' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
