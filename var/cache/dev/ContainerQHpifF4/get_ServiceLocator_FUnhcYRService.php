<?php

namespace ContainerQHpifF4;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FUnhcYRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fUnhcYR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fUnhcYR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
            'vehicule' => ['privates', '.errored..service_locator.fUnhcYR.App\\Entity\\Vehicule', NULL, 'Cannot autowire service ".service_locator.fUnhcYR": it references class "App\\Entity\\Vehicule" but no such service exists.'],
        ], [
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
            'vehicule' => 'App\\Entity\\Vehicule',
        ]);
    }
}
