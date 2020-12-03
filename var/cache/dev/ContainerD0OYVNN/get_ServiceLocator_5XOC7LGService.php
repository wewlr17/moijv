<?php

namespace ContainerD0OYVNN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5XOC7LGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5XOC7LG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5XOC7LG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\GameController::gameDetails' => ['privates', '.service_locator.sKIJTvo', 'get_ServiceLocator_SKIJTvoService', true],
            'App\\Controller\\GameController::gameForm' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.TSNkGqc', 'get_ServiceLocator_TSNkGqcService', true],
            'App\\Controller\\HomeController::show_category' => ['privates', '.service_locator.TSNkGqc', 'get_ServiceLocator_TSNkGqcService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.bifUV3P', 'get_ServiceLocator_BifUV3PService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\UserController::details' => ['privates', '.service_locator.BJNwCv3', 'get_ServiceLocator_BJNwCv3Service', true],
            'App\\Controller\\UserController::profileForm' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\GameController:gameDetails' => ['privates', '.service_locator.sKIJTvo', 'get_ServiceLocator_SKIJTvoService', true],
            'App\\Controller\\GameController:gameForm' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.TSNkGqc', 'get_ServiceLocator_TSNkGqcService', true],
            'App\\Controller\\HomeController:show_category' => ['privates', '.service_locator.TSNkGqc', 'get_ServiceLocator_TSNkGqcService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.bifUV3P', 'get_ServiceLocator_BifUV3PService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\UserController:details' => ['privates', '.service_locator.BJNwCv3', 'get_ServiceLocator_BJNwCv3Service', true],
            'App\\Controller\\UserController:profileForm' => ['privates', '.service_locator.Om4dtJv', 'get_ServiceLocator_Om4dtJvService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\GameController::gameDetails' => '?',
            'App\\Controller\\GameController::gameForm' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\HomeController::show_category' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::details' => '?',
            'App\\Controller\\UserController::profileForm' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\GameController:gameDetails' => '?',
            'App\\Controller\\GameController:gameForm' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\HomeController:show_category' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:details' => '?',
            'App\\Controller\\UserController:profileForm' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}