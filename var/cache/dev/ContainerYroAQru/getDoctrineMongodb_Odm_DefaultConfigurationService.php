<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_mongodb.odm.default_configuration' shared service.

include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\Cache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\FlushableCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ClearableCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiGetCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiDeleteCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiPutCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\MultiOperationCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\CacheProvider.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\cache\\lib\\Doctrine\\Common\\Cache\\ArrayCache.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriver.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\AnnotationDriver.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\mongodb-odm\\lib\\Doctrine\\ODM\\MongoDB\\Mapping\\Driver\\AnnotationDriver.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\common\\lib\\Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\mongodb-odm-bundle\\Logger\\Logger.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\mongodb-odm-bundle\\Logger\\AggregateLogger.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\mongodb\\lib\\Doctrine\\MongoDB\\Configuration.php';
include_once $this->targetDirs[3].'\\vendor\\doctrine\\mongodb-odm\\lib\\Doctrine\\ODM\\MongoDB\\Configuration.php';

$this->privates['doctrine_mongodb.odm.default_configuration'] = $instance = new \Doctrine\ODM\MongoDB\Configuration();

$a = new \Doctrine\Common\Cache\ArrayCache();
$a->setNamespace('sf_mongodb_default__mIyXco');

$b = new \Doctrine\Common\Persistence\Mapping\Driver\MappingDriverChain();
$b->addDriver(new \Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), array(0 => ($this->targetDirs[3].'\\src\\Document'))), 'App\\Document\\');

$c = new \Doctrine\Bundle\MongoDBBundle\Logger\Logger(($this->privates['monolog.logger.doctrine'] ?? $this->load('getMonolog_Logger_DoctrineService.php')));
$c->setBatchInsertThreshold(4);

$instance->setDocumentNamespaces(array('App' => 'App\\Document\\'));
$instance->setMetadataCacheImpl($a);
$instance->setMetadataDriverImpl($b);
$instance->setProxyDir(($this->targetDirs[0].'/doctrine/odm/mongodb/Proxies'));
$instance->setProxyNamespace('MongoDBODMProxies');
$instance->setAutoGenerateProxyClasses(1);
$instance->setHydratorDir(($this->targetDirs[0].'/doctrine/odm/mongodb/Hydrators'));
$instance->setHydratorNamespace('Hydrators');
$instance->setAutoGenerateHydratorClasses(1);
$instance->setDefaultDB($this->getEnv('MONGODB_DB'));
$instance->setDefaultCommitOptions(array());
$instance->setRetryConnect(0);
$instance->setRetryQuery(0);
$instance->setDefaultRepositoryClassName('Doctrine\\ODM\\MongoDB\\DocumentRepository');
$instance->setPersistentCollectionDir(($this->targetDirs[0].'/doctrine/odm/mongodb/PersistentCollections'));
$instance->setPersistentCollectionNamespace('PersistentCollections');
$instance->setAutoGeneratePersistentCollectionClasses(0);
$instance->setLoggerCallable(array(0 => new \Doctrine\Bundle\MongoDBBundle\Logger\AggregateLogger(array(0 => $c, 1 => ($this->privates['doctrine_mongodb.odm.data_collector.pretty'] ?? $this->getDoctrineMongodb_Odm_DataCollector_PrettyService()))), 1 => 'logQuery'));

return $instance;