<?php

namespace ContainerFFImruE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_J4We50rService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.j4We50r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.j4We50r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'colisRepository' => ['privates', 'App\\Repository\\DocumentexpeditionRepository', 'getDocumentexpeditionRepositoryService', true],
        ], [
            'colisRepository' => 'App\\Repository\\DocumentexpeditionRepository',
        ]);
    }
}
