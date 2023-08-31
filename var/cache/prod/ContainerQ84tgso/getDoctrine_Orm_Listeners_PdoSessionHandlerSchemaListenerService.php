<?php

namespace ContainerQ84tgso;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_Listeners_PdoSessionHandlerSchemaListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'doctrine.orm.listeners.pdo_session_handler_schema_listener' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['doctrine.orm.listeners.pdo_session_handler_schema_listener'] = new \Symfony\Bridge\Doctrine\SchemaListener\PdoSessionHandlerSchemaListener(($container->privates['session.handler.native'] ?? $container->load('getSession_Handler_NativeService')));
    }
}
