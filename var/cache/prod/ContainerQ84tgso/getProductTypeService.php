<?php

namespace ContainerQ84tgso;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ProductType' shared autowired service.
     *
     * @return \App\Form\ProductType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ProductType'] = new \App\Form\ProductType();
    }
}