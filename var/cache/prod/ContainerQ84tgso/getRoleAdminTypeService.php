<?php

namespace ContainerQ84tgso;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRoleAdminTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\RoleAdminType' shared autowired service.
     *
     * @return \App\Form\RoleAdminType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\RoleAdminType'] = new \App\Form\RoleAdminType();
    }
}