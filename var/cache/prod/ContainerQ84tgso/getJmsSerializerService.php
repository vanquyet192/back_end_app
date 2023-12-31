<?php

namespace ContainerQ84tgso;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'jms_serializer' shared service.
     *
     * @return \JMS\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Metadata\MetadataFactory(new \Metadata\Driver\LazyLoadingDriver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'metadata_driver' => ['privates', 'jms_serializer.metadata.typed_properties_driver', 'getJmsSerializer_Metadata_TypedPropertiesDriverService', true],
        ], [
            'metadata_driver' => '?',
        ]), 'metadata_driver'), 'Metadata\\ClassHierarchyMetadata', false);
        $a->setCache(($container->privates['jms_serializer.metadata.cache.file_cache'] ??= new \Metadata\Cache\FileCache(($container->targetDir.''.'/jms_serializer_default'))));
        $a->setIncludeInterfaces(false);
        $b = new \JMS\Serializer\Handler\LazyHandlerRegistry(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'jms_serializer.array_collection_handler' => ['privates', 'jms_serializer.array_collection_handler', 'getJmsSerializer_ArrayCollectionHandlerService', true],
            'jms_serializer.constraint_violation_handler' => ['privates', 'jms_serializer.constraint_violation_handler', 'getJmsSerializer_ConstraintViolationHandlerService', true],
            'jms_serializer.datetime_handler' => ['privates', 'jms_serializer.datetime_handler', 'getJmsSerializer_DatetimeHandlerService', true],
            'jms_serializer.iterator_handler' => ['privates', 'jms_serializer.iterator_handler', 'getJmsSerializer_IteratorHandlerService', true],
            'fos_rest.serializer.form_error_handler' => ['privates', 'fos_rest.serializer.form_error_handler', 'getFosRest_Serializer_FormErrorHandlerService', true],
        ], [
            'jms_serializer.array_collection_handler' => '?',
            'jms_serializer.constraint_violation_handler' => '?',
            'jms_serializer.datetime_handler' => '?',
            'jms_serializer.iterator_handler' => '?',
            'fos_rest.serializer.form_error_handler' => '?',
        ]), [1 => ['ArrayCollection' => ['json' => ['jms_serializer.array_collection_handler', 'serializeCollection'], 'xml' => ['jms_serializer.array_collection_handler', 'serializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => ['jms_serializer.array_collection_handler', 'serializeCollection'], 'xml' => ['jms_serializer.array_collection_handler', 'serializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => ['jms_serializer.array_collection_handler', 'serializeCollection'], 'xml' => ['jms_serializer.array_collection_handler', 'serializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => ['jms_serializer.array_collection_handler', 'serializeCollection'], 'xml' => ['jms_serializer.array_collection_handler', 'serializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => ['jms_serializer.array_collection_handler', 'serializeCollection'], 'xml' => ['jms_serializer.array_collection_handler', 'serializeCollection']], 'Symfony\\Component\\Validator\\ConstraintViolationList' => ['xml' => ['jms_serializer.constraint_violation_handler', 'serializeListToxml'], 'json' => ['jms_serializer.constraint_violation_handler', 'serializeListTojson']], 'Symfony\\Component\\Validator\\ConstraintViolation' => ['xml' => ['jms_serializer.constraint_violation_handler', 'serializeViolationToxml'], 'json' => ['jms_serializer.constraint_violation_handler', 'serializeViolationTojson']], 'DateTime' => ['json' => ['jms_serializer.datetime_handler', 'serializeDateTime'], 'xml' => ['jms_serializer.datetime_handler', 'serializeDateTime']], 'DateTimeImmutable' => ['json' => ['jms_serializer.datetime_handler', 'serializeDateTimeImmutable'], 'xml' => ['jms_serializer.datetime_handler', 'serializeDateTimeImmutable']], 'DateInterval' => ['json' => ['jms_serializer.datetime_handler', 'serializeDateInterval'], 'xml' => ['jms_serializer.datetime_handler', 'serializeDateInterval']], 'DateTimeInterface' => ['json' => ['jms_serializer.datetime_handler', 'serializeDateTimeInterface'], 'xml' => ['jms_serializer.datetime_handler', 'serializeDateTimeInterface']], 'Iterator' => ['json' => ['jms_serializer.iterator_handler', 'serializeIterable'], 'xml' => ['jms_serializer.iterator_handler', 'serializeIterable']], 'ArrayIterator' => ['json' => ['jms_serializer.iterator_handler', 'serializeIterable'], 'xml' => ['jms_serializer.iterator_handler', 'serializeIterable']], 'Generator' => ['json' => ['jms_serializer.iterator_handler', 'serializeIterable'], 'xml' => ['jms_serializer.iterator_handler', 'serializeIterable']], 'Symfony\\Component\\Form\\Form' => ['xml' => ['fos_rest.serializer.form_error_handler', 'serializeFormToxml'], 'json' => ['fos_rest.serializer.form_error_handler', 'serializeFormTojson']], 'Symfony\\Component\\Form\\FormInterface' => ['xml' => ['fos_rest.serializer.form_error_handler', 'serializeFormToXml'], 'json' => ['fos_rest.serializer.form_error_handler', 'serializeFormToJson']], 'Symfony\\Component\\Form\\FormError' => ['xml' => ['fos_rest.serializer.form_error_handler', 'serializeFormErrorToxml'], 'json' => ['fos_rest.serializer.form_error_handler', 'serializeFormErrorTojson']]], 2 => ['ArrayCollection' => ['json' => ['jms_serializer.array_collection_handler', 'deserializeCollection'], 'xml' => ['jms_serializer.array_collection_handler', 'deserializeCollection']], 'Doctrine\\Common\\Collections\\ArrayCollection' => ['json' => ['jms_serializer.array_collection_handler', 'deserializeCollection'], 'xml' => ['jms_serializer.array_collection_handler', 'deserializeCollection']], 'Doctrine\\ORM\\PersistentCollection' => ['json' => ['jms_serializer.array_collection_handler', 'deserializeCollection'], 'xml' => ['jms_serializer.array_collection_handler', 'deserializeCollection']], 'Doctrine\\ODM\\MongoDB\\PersistentCollection' => ['json' => ['jms_serializer.array_collection_handler', 'deserializeCollection'], 'xml' => ['jms_serializer.array_collection_handler', 'deserializeCollection']], 'Doctrine\\ODM\\PHPCR\\PersistentCollection' => ['json' => ['jms_serializer.array_collection_handler', 'deserializeCollection'], 'xml' => ['jms_serializer.array_collection_handler', 'deserializeCollection']], 'DateTime' => ['json' => ['jms_serializer.datetime_handler', 'deserializeDateTimeFromjson'], 'xml' => ['jms_serializer.datetime_handler', 'deserializeDateTimeFromxml']], 'DateTimeImmutable' => ['json' => ['jms_serializer.datetime_handler', 'deserializeDateTimeImmutableFromjson'], 'xml' => ['jms_serializer.datetime_handler', 'deserializeDateTimeImmutableFromxml']], 'DateInterval' => ['json' => ['jms_serializer.datetime_handler', 'deserializeDateIntervalFromjson'], 'xml' => ['jms_serializer.datetime_handler', 'deserializeDateIntervalFromxml']], 'DateTimeInterface' => ['json' => ['jms_serializer.datetime_handler', 'deserializeDateTimeFromJson'], 'xml' => ['jms_serializer.datetime_handler', 'deserializeDateTimeFromXml']], 'Iterator' => ['json' => ['jms_serializer.iterator_handler', 'deserializeIterator'], 'xml' => ['jms_serializer.iterator_handler', 'deserializeIterator']], 'ArrayIterator' => ['json' => ['jms_serializer.iterator_handler', 'deserializeIterator'], 'xml' => ['jms_serializer.iterator_handler', 'deserializeIterator']], 'Generator' => ['json' => ['jms_serializer.iterator_handler', 'deserializeGenerator'], 'xml' => ['jms_serializer.iterator_handler', 'deserializeGenerator']]]]);
        $c = ($container->privates['jms_serializer.expression_evaluator'] ?? $container->load('getJmsSerializer_ExpressionEvaluatorService'));

        $d = new \JMS\Serializer\Accessor\DefaultAccessorStrategy($c);
        $e = new \JMS\Serializer\EventDispatcher\LazyEventDispatcher(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'jms_serializer.doctrine_proxy_subscriber' => ['privates', 'jms_serializer.doctrine_proxy_subscriber', 'getJmsSerializer_DoctrineProxySubscriberService', true],
        ], [
            'jms_serializer.doctrine_proxy_subscriber' => '?',
        ]));
        $e->addListener('serializer.pre_serialize', ['jms_serializer.doctrine_proxy_subscriber', 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $e->addListener('serializer.pre_serialize', ['jms_serializer.doctrine_proxy_subscriber', 'onPreSerializeTypedProxy'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $e->addListener('serializer.pre_serialize', ['jms_serializer.doctrine_proxy_subscriber', 'onPreSerialize'], NULL, NULL, 'Doctrine\\ORM\\PersistentCollection');
        $e->addListener('serializer.pre_serialize', ['jms_serializer.doctrine_proxy_subscriber', 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\MongoDB\\PersistentCollection');
        $e->addListener('serializer.pre_serialize', ['jms_serializer.doctrine_proxy_subscriber', 'onPreSerialize'], NULL, NULL, 'Doctrine\\ODM\\PHPCR\\PersistentCollection');
        $e->addListener('serializer.pre_serialize', ['jms_serializer.doctrine_proxy_subscriber', 'onPreSerialize'], NULL, NULL, 'Doctrine\\Persistence\\Proxy');
        $e->addListener('serializer.pre_serialize', ['jms_serializer.doctrine_proxy_subscriber', 'onPreSerialize'], NULL, NULL, 'Doctrine\\Common\\Persistence\\Proxy');
        $e->addListener('serializer.pre_serialize', ['jms_serializer.doctrine_proxy_subscriber', 'onPreSerialize'], NULL, NULL, 'ProxyManager\\Proxy\\LazyLoadingInterface');
        $f = new \JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory();
        $f->setOptions(1088);
        $g = new \JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory(false);
        $g->setOptions(0);

        return $container->services['jms_serializer'] = new \JMS\Serializer\Serializer($a, [2 => new \JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory($a, $b, new \JMS\Serializer\Construction\DoctrineObjectConstructor(($container->services['doctrine'] ?? self::getDoctrineService($container)), new \JMS\Serializer\Construction\UnserializeObjectConstructor(), 'null'), $d, $e, $c), 1 => new \JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory($a, $b, $d, $e, $c)], ['json' => $f, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory()], ['json' => $g, 'xml' => new \JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory()], ($container->services['jms_serializer.serialization_context_factory'] ??= new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()), ($container->services['jms_serializer.deserialization_context_factory'] ??= new \JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory()), ($container->privates['jms_serializer.type_parser'] ??= new \JMS\Serializer\Type\Parser()));
    }
}
