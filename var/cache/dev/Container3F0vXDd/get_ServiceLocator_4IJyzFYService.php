<?php

namespace Container3F0vXDd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4IJyzFYService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4IJyzFY' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4IJyzFY'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\AdminController::edit' => ['privates', '.service_locator.bsljZSk', 'get_ServiceLocator_BsljZSkService', true],
            'App\\Controller\\AdminController::index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\AdminController::new' => ['privates', '.service_locator.D0T2yQY', 'get_ServiceLocator_D0T2yQYService', true],
            'App\\Controller\\AdminController::searchStudentx' => ['privates', '.service_locator.i9GOSYV', 'get_ServiceLocator_I9GOSYVService', true],
            'App\\Controller\\AdminController::show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\AnnoncesController::delete' => ['privates', '.service_locator.CjLvgM8', 'get_ServiceLocator_CjLvgM8Service', true],
            'App\\Controller\\AnnoncesController::edit' => ['privates', '.service_locator.CjLvgM8', 'get_ServiceLocator_CjLvgM8Service', true],
            'App\\Controller\\AnnoncesController::index' => ['privates', '.service_locator.Tr_CAXc', 'get_ServiceLocator_TrCAXcService', true],
            'App\\Controller\\AnnoncesController::new' => ['privates', '.service_locator.Tr_CAXc', 'get_ServiceLocator_TrCAXcService', true],
            'App\\Controller\\AnnoncesController::show' => ['privates', '.service_locator.ECpDOfk', 'get_ServiceLocator_ECpDOfkService', true],
            'App\\Controller\\ColisController::delete' => ['privates', '.service_locator.S8.Ozi0', 'get_ServiceLocator_S8_Ozi0Service', true],
            'App\\Controller\\ColisController::edit' => ['privates', '.service_locator.S8.Ozi0', 'get_ServiceLocator_S8_Ozi0Service', true],
            'App\\Controller\\ColisController::index' => ['privates', '.service_locator.XnXXhVu', 'get_ServiceLocator_XnXXhVuService', true],
            'App\\Controller\\ColisController::new' => ['privates', '.service_locator.6pzvAnp', 'get_ServiceLocator_6pzvAnpService', true],
            'App\\Controller\\ColisController::show' => ['privates', '.service_locator.tkJC0R2', 'get_ServiceLocator_TkJC0R2Service', true],
            'App\\Controller\\LoginController::index' => ['privates', '.service_locator.wcbp3cq', 'get_ServiceLocator_Wcbp3cqService', true],
            'App\\Controller\\MessageController::delete' => ['privates', '.service_locator.UoAUkAt', 'get_ServiceLocator_UoAUkAtService', true],
            'App\\Controller\\MessageController::edit' => ['privates', '.service_locator.UoAUkAt', 'get_ServiceLocator_UoAUkAtService', true],
            'App\\Controller\\MessageController::index' => ['privates', '.service_locator.tQUwO87', 'get_ServiceLocator_TQUwO87Service', true],
            'App\\Controller\\MessageController::mrecu' => ['privates', '.service_locator.tQUwO87', 'get_ServiceLocator_TQUwO87Service', true],
            'App\\Controller\\MessageController::new' => ['privates', '.service_locator.7B8MPwp', 'get_ServiceLocator_7B8MPwpService', true],
            'App\\Controller\\MessageController::show' => ['privates', '.service_locator.MjFFzS6', 'get_ServiceLocator_MjFFzS6Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.kdKsWx5', 'get_ServiceLocator_KdKsWx5Service', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.001ztJT', 'get_ServiceLocator_001ztJTService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator._yIf3yV', 'get_ServiceLocator_YIf3yVService', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.001ztJT', 'get_ServiceLocator_001ztJTService', true],
            'App\\Controller\\UserController::searchStudentx' => ['privates', '.service_locator.i9GOSYV', 'get_ServiceLocator_I9GOSYVService', true],
            'App\\Controller\\UserController::showp' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\ValidationController::delete' => ['privates', '.service_locator.Q1EeZWh', 'get_ServiceLocator_Q1EeZWhService', true],
            'App\\Controller\\ValidationController::edit' => ['privates', '.service_locator.Q1EeZWh', 'get_ServiceLocator_Q1EeZWhService', true],
            'App\\Controller\\ValidationController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ValidationController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ValidationController::show' => ['privates', '.service_locator.Q1EeZWh', 'get_ServiceLocator_Q1EeZWhService', true],
            'App\\Controller\\VehiculeController::delete' => ['privates', '.service_locator.iVJ8gI9', 'get_ServiceLocator_IVJ8gI9Service', true],
            'App\\Controller\\VehiculeController::edit' => ['privates', '.service_locator.iVJ8gI9', 'get_ServiceLocator_IVJ8gI9Service', true],
            'App\\Controller\\VehiculeController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\VehiculeController::new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\VehiculeController::show' => ['privates', '.service_locator.pB20uqv', 'get_ServiceLocator_PB20uqvService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AdminController:delete' => ['privates', '.service_locator.9uW928t', 'get_ServiceLocator_9uW928tService', true],
            'App\\Controller\\AdminController:edit' => ['privates', '.service_locator.bsljZSk', 'get_ServiceLocator_BsljZSkService', true],
            'App\\Controller\\AdminController:index' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\AdminController:new' => ['privates', '.service_locator.D0T2yQY', 'get_ServiceLocator_D0T2yQYService', true],
            'App\\Controller\\AdminController:searchStudentx' => ['privates', '.service_locator.i9GOSYV', 'get_ServiceLocator_I9GOSYVService', true],
            'App\\Controller\\AdminController:show' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\AnnoncesController:delete' => ['privates', '.service_locator.CjLvgM8', 'get_ServiceLocator_CjLvgM8Service', true],
            'App\\Controller\\AnnoncesController:edit' => ['privates', '.service_locator.CjLvgM8', 'get_ServiceLocator_CjLvgM8Service', true],
            'App\\Controller\\AnnoncesController:index' => ['privates', '.service_locator.Tr_CAXc', 'get_ServiceLocator_TrCAXcService', true],
            'App\\Controller\\AnnoncesController:new' => ['privates', '.service_locator.Tr_CAXc', 'get_ServiceLocator_TrCAXcService', true],
            'App\\Controller\\AnnoncesController:show' => ['privates', '.service_locator.ECpDOfk', 'get_ServiceLocator_ECpDOfkService', true],
            'App\\Controller\\ColisController:delete' => ['privates', '.service_locator.S8.Ozi0', 'get_ServiceLocator_S8_Ozi0Service', true],
            'App\\Controller\\ColisController:edit' => ['privates', '.service_locator.S8.Ozi0', 'get_ServiceLocator_S8_Ozi0Service', true],
            'App\\Controller\\ColisController:index' => ['privates', '.service_locator.XnXXhVu', 'get_ServiceLocator_XnXXhVuService', true],
            'App\\Controller\\ColisController:new' => ['privates', '.service_locator.6pzvAnp', 'get_ServiceLocator_6pzvAnpService', true],
            'App\\Controller\\ColisController:show' => ['privates', '.service_locator.tkJC0R2', 'get_ServiceLocator_TkJC0R2Service', true],
            'App\\Controller\\LoginController:index' => ['privates', '.service_locator.wcbp3cq', 'get_ServiceLocator_Wcbp3cqService', true],
            'App\\Controller\\MessageController:delete' => ['privates', '.service_locator.UoAUkAt', 'get_ServiceLocator_UoAUkAtService', true],
            'App\\Controller\\MessageController:edit' => ['privates', '.service_locator.UoAUkAt', 'get_ServiceLocator_UoAUkAtService', true],
            'App\\Controller\\MessageController:index' => ['privates', '.service_locator.tQUwO87', 'get_ServiceLocator_TQUwO87Service', true],
            'App\\Controller\\MessageController:mrecu' => ['privates', '.service_locator.tQUwO87', 'get_ServiceLocator_TQUwO87Service', true],
            'App\\Controller\\MessageController:new' => ['privates', '.service_locator.7B8MPwp', 'get_ServiceLocator_7B8MPwpService', true],
            'App\\Controller\\MessageController:show' => ['privates', '.service_locator.MjFFzS6', 'get_ServiceLocator_MjFFzS6Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.kdKsWx5', 'get_ServiceLocator_KdKsWx5Service', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.001ztJT', 'get_ServiceLocator_001ztJTService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator._yIf3yV', 'get_ServiceLocator_YIf3yVService', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.001ztJT', 'get_ServiceLocator_001ztJTService', true],
            'App\\Controller\\UserController:searchStudentx' => ['privates', '.service_locator.i9GOSYV', 'get_ServiceLocator_I9GOSYVService', true],
            'App\\Controller\\UserController:showp' => ['privates', '.service_locator.4T4EJFR', 'get_ServiceLocator_4T4EJFRService', true],
            'App\\Controller\\ValidationController:delete' => ['privates', '.service_locator.Q1EeZWh', 'get_ServiceLocator_Q1EeZWhService', true],
            'App\\Controller\\ValidationController:edit' => ['privates', '.service_locator.Q1EeZWh', 'get_ServiceLocator_Q1EeZWhService', true],
            'App\\Controller\\ValidationController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ValidationController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ValidationController:show' => ['privates', '.service_locator.Q1EeZWh', 'get_ServiceLocator_Q1EeZWhService', true],
            'App\\Controller\\VehiculeController:delete' => ['privates', '.service_locator.iVJ8gI9', 'get_ServiceLocator_IVJ8gI9Service', true],
            'App\\Controller\\VehiculeController:edit' => ['privates', '.service_locator.iVJ8gI9', 'get_ServiceLocator_IVJ8gI9Service', true],
            'App\\Controller\\VehiculeController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\VehiculeController:new' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\VehiculeController:show' => ['privates', '.service_locator.pB20uqv', 'get_ServiceLocator_PB20uqvService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AdminController::delete' => '?',
            'App\\Controller\\AdminController::edit' => '?',
            'App\\Controller\\AdminController::index' => '?',
            'App\\Controller\\AdminController::new' => '?',
            'App\\Controller\\AdminController::searchStudentx' => '?',
            'App\\Controller\\AdminController::show' => '?',
            'App\\Controller\\AnnoncesController::delete' => '?',
            'App\\Controller\\AnnoncesController::edit' => '?',
            'App\\Controller\\AnnoncesController::index' => '?',
            'App\\Controller\\AnnoncesController::new' => '?',
            'App\\Controller\\AnnoncesController::show' => '?',
            'App\\Controller\\ColisController::delete' => '?',
            'App\\Controller\\ColisController::edit' => '?',
            'App\\Controller\\ColisController::index' => '?',
            'App\\Controller\\ColisController::new' => '?',
            'App\\Controller\\ColisController::show' => '?',
            'App\\Controller\\LoginController::index' => '?',
            'App\\Controller\\MessageController::delete' => '?',
            'App\\Controller\\MessageController::edit' => '?',
            'App\\Controller\\MessageController::index' => '?',
            'App\\Controller\\MessageController::mrecu' => '?',
            'App\\Controller\\MessageController::new' => '?',
            'App\\Controller\\MessageController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::searchStudentx' => '?',
            'App\\Controller\\UserController::showp' => '?',
            'App\\Controller\\ValidationController::delete' => '?',
            'App\\Controller\\ValidationController::edit' => '?',
            'App\\Controller\\ValidationController::index' => '?',
            'App\\Controller\\ValidationController::new' => '?',
            'App\\Controller\\ValidationController::show' => '?',
            'App\\Controller\\VehiculeController::delete' => '?',
            'App\\Controller\\VehiculeController::edit' => '?',
            'App\\Controller\\VehiculeController::index' => '?',
            'App\\Controller\\VehiculeController::new' => '?',
            'App\\Controller\\VehiculeController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:delete' => '?',
            'App\\Controller\\AdminController:edit' => '?',
            'App\\Controller\\AdminController:index' => '?',
            'App\\Controller\\AdminController:new' => '?',
            'App\\Controller\\AdminController:searchStudentx' => '?',
            'App\\Controller\\AdminController:show' => '?',
            'App\\Controller\\AnnoncesController:delete' => '?',
            'App\\Controller\\AnnoncesController:edit' => '?',
            'App\\Controller\\AnnoncesController:index' => '?',
            'App\\Controller\\AnnoncesController:new' => '?',
            'App\\Controller\\AnnoncesController:show' => '?',
            'App\\Controller\\ColisController:delete' => '?',
            'App\\Controller\\ColisController:edit' => '?',
            'App\\Controller\\ColisController:index' => '?',
            'App\\Controller\\ColisController:new' => '?',
            'App\\Controller\\ColisController:show' => '?',
            'App\\Controller\\LoginController:index' => '?',
            'App\\Controller\\MessageController:delete' => '?',
            'App\\Controller\\MessageController:edit' => '?',
            'App\\Controller\\MessageController:index' => '?',
            'App\\Controller\\MessageController:mrecu' => '?',
            'App\\Controller\\MessageController:new' => '?',
            'App\\Controller\\MessageController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:searchStudentx' => '?',
            'App\\Controller\\UserController:showp' => '?',
            'App\\Controller\\ValidationController:delete' => '?',
            'App\\Controller\\ValidationController:edit' => '?',
            'App\\Controller\\ValidationController:index' => '?',
            'App\\Controller\\ValidationController:new' => '?',
            'App\\Controller\\ValidationController:show' => '?',
            'App\\Controller\\VehiculeController:delete' => '?',
            'App\\Controller\\VehiculeController:edit' => '?',
            'App\\Controller\\VehiculeController:index' => '?',
            'App\\Controller\\VehiculeController:new' => '?',
            'App\\Controller\\VehiculeController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
