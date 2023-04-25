<?php

namespace ContainerR4J0zDn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TkJC0R2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tkJC0R2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tkJC0R2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coli' => ['privates', '.errored..service_locator.tkJC0R2.App\\Entity\\Colis', NULL, 'Cannot autowire service ".service_locator.tkJC0R2": it references class "App\\Entity\\Colis" but no such service exists.'],
        ], [
            'coli' => 'App\\Entity\\Colis',
        ]);
    }
}
