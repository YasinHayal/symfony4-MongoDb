<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache_warmer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheWarmer\\CacheWarmerAggregate.php';

return $this->services['cache_warmer'] = new \Symfony\Component\HttpKernel\CacheWarmer\CacheWarmerAggregate(new RewindableGenerator(function () {
    yield 0 => ($this->privates['doctrine_mongodb.odm.proxy_cache_warmer'] ?? $this->privates['doctrine_mongodb.odm.proxy_cache_warmer'] = new \Doctrine\Bundle\MongoDBBundle\CacheWarmer\ProxyCacheWarmer($this));
    yield 1 => ($this->privates['doctrine_mongodb.odm.hydrator_cache_warmer'] ?? $this->privates['doctrine_mongodb.odm.hydrator_cache_warmer'] = new \Doctrine\Bundle\MongoDBBundle\CacheWarmer\HydratorCacheWarmer($this));
    yield 2 => ($this->privates['doctrine_mongodb.odm.persistent_collection_cache_warmer'] ?? $this->privates['doctrine_mongodb.odm.persistent_collection_cache_warmer'] = new \Doctrine\Bundle\MongoDBBundle\CacheWarmer\PersistentCollectionCacheWarmer($this));
    yield 3 => ($this->privates['validator.mapping.cache_warmer'] ?? $this->load('getValidator_Mapping_CacheWarmerService.php'));
    yield 4 => ($this->privates['translation.warmer'] ?? $this->load('getTranslation_WarmerService.php'));
    yield 5 => ($this->privates['router.cache_warmer'] ?? $this->load('getRouter_CacheWarmerService.php'));
    yield 6 => ($this->privates['annotations.cache_warmer'] ?? $this->load('getAnnotations_CacheWarmerService.php'));
    yield 7 => ($this->privates['serializer.mapping.cache_warmer'] ?? $this->load('getSerializer_Mapping_CacheWarmerService.php'));
    yield 8 => ($this->privates['twig.cache_warmer'] ?? $this->load('getTwig_CacheWarmerService.php'));
    yield 9 => ($this->privates['twig.template_cache_warmer'] ?? $this->load('getTwig_TemplateCacheWarmerService.php'));
    yield 10 => ($this->privates['doctrine.orm.proxy_cache_warmer'] ?? $this->load('getDoctrine_Orm_ProxyCacheWarmerService.php'));
}, 11));