<?php

namespace ContainerFFImruE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6pzvAnpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6pzvAnp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6pzvAnp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'colisRepository' => ['privates', 'App\\Repository\\ColisRepository', 'getColisRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'colisRepository' => 'App\\Repository\\ColisRepository',
            'entityManager' => '?',
        ]);
    }
}
