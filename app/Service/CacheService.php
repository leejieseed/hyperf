<?php
/**
 * Copyright (C), 2016-2018, Shall Buy Life info. Co., Ltd.
 * FileName: CacheService.php
 * Description: 说明
 * @author leejie
 * @Create Date 2021/02/09 14:12
 * @Update Date 2021/02/09 14:12 BY leejie
 * @version v1.0
 */

namespace App\Service;


use Psr\SimpleCache\CacheInterface;
use Hyperf\Utils\ApplicationContext;

class CacheService
{
    /**
     * @inject
     * @var CacheInterface
     */
    protected $cache;
    public function __construct()
    {
        $container = ApplicationContext::getContainer();
        $this->cache = $container->get(CacheInterface::class);
    }

    public function get($key, $default = null)
    {
        return $this->cache->get($key);
    }

    public function set($key, $value, $ttl = null)
    {
       return $this->cache->set($key,$value,$ttl);
//        return new SimpleCache();
    }

    public function delete($key)
    {
        // TODO: Implement delete() method.
    }

    public function clear()
    {
        // TODO: Implement clear() method.
    }

    public function getMultiple($keys, $default = null)
    {
        // TODO: Implement getMultiple() method.
    }

    public function setMultiple($values, $ttl = null)
    {
        // TODO: Implement setMultiple() method.
    }

    public function deleteMultiple($keys)
    {
        // TODO: Implement deleteMultiple() method.
    }

    public function has($key)
    {
        return $this->cache->has($key);
    }
}