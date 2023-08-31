<?php

namespace ContainerQ84tgso;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Command_EntityManagerProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.command.entity_manager_provider' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Orm\ManagerRegistryAwareEntityManagerProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.command.entity_manager_provider'] = new \Doctrine\Bundle\DoctrineBundle\Orm\ManagerRegistryAwareEntityManagerProvider(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
