<?php

namespace ContainerQHpifF4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_N1cyaqoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.n1cyaqo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.n1cyaqo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'annoncesRepository' => ['privates', 'App\\Repository\\AnnoncesRepository', 'getAnnoncesRepositoryService', true],
            'colisRepository' => ['privates', 'App\\Repository\\ColisRepository', 'getColisRepositoryService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'annoncesRepository' => 'App\\Repository\\AnnoncesRepository',
            'colisRepository' => 'App\\Repository\\ColisRepository',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
