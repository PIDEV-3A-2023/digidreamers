<?php

namespace ContainerRBHbnoO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MjFFzS6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MjFFzS6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MjFFzS6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'message' => ['privates', '.errored..service_locator.MjFFzS6.App\\Entity\\Message', NULL, 'Cannot autowire service ".service_locator.MjFFzS6": it references class "App\\Entity\\Message" but no such service exists.'],
        ], [
            'message' => 'App\\Entity\\Message',
        ]);
    }
}
