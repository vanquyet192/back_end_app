<?php

namespace ContainerQ84tgso;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_Metadata_TypedPropertiesDriverService extends App_KernelProdContainer
{
    /*
     * Gets the private 'jms_serializer.metadata.typed_properties_driver' shared service.
     *
     * @return \JMS\Serializer\Metadata\Driver\TypedPropertiesDriver
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Metadata\Driver\FileLocator([]);
        $b = new \JMS\Serializer\Naming\SerializedNameAnnotationStrategy(new \JMS\Serializer\Naming\CamelCaseNamingStrategy('_', true));
        $c = ($container->privates['jms_serializer.type_parser'] ??= new \JMS\Serializer\Type\Parser());
        $d = ($container->privates['jms_serializer.expression_evaluator'] ?? $container->load('getJmsSerializer_ExpressionEvaluatorService'));

        return $container->privates['jms_serializer.metadata.typed_properties_driver'] = new \JMS\Serializer\Metadata\Driver\TypedPropertiesDriver(new \JMS\Serializer\Metadata\Driver\DoctrineTypeDriver(new \Metadata\Driver\DriverChain([new \JMS\Serializer\Metadata\Driver\YamlDriver($a, $b, $c, $d), new \JMS\Serializer\Metadata\Driver\XmlDriver($a, $b, $c, $d), new \JMS\Serializer\Metadata\Driver\AnnotationDriver(new \JMS\Serializer\Metadata\Driver\AttributeDriver\AttributeReader(($container->privates['annotations.cached_reader'] ?? self::getAnnotations_CachedReaderService($container))), $b, $c, $d)]), ($container->services['doctrine'] ?? self::getDoctrineService($container)), $c), $c);
    }
}
