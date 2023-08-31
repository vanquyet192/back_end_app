<?php

namespace ContainerKDCIIPV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GByJmOWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.GByJmOW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GByJmOW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'roleAdmin' => ['privates', '.errored..service_locator.GByJmOW.App\\Entity\\RoleAdmin', NULL, 'Cannot autowire service ".service_locator.GByJmOW": it needs an instance of "App\\Entity\\RoleAdmin" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'roleAdmin' => 'App\\Entity\\RoleAdmin',
        ]);
    }
}
