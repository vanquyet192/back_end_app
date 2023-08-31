<?php

namespace ContainerQ84tgso;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRoleAdminRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\RoleAdminRepository' shared autowired service.
     *
     * @return \App\Repository\RoleAdminRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\RoleAdminRepository'] = new \App\Repository\RoleAdminRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
