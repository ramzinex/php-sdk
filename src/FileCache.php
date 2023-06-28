<?php

namespace ramzinex;


use Cache\Adapter\Common\CacheItem;
use Cache\Adapter\Filesystem\FilesystemCachePool;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use Psr\SimpleCache\InvalidArgumentException;

class FileCache
{
    protected FilesystemCachePool $instance;

    public function __construct($folder = null)
    {
        $filesystemAdapter = new Local(__DIR__ . '/');
        $filesystem = new Filesystem($filesystemAdapter);

        $this->instance = new FilesystemCachePool($filesystem, $folder);
    }

    /**
     * @throws InvalidArgumentException
     * default on 10 minuets *
     */
    public function setItem($key, $value, $expire_time =  null)
    {
        $this->instance->set($key, $value, $expire_time);

    }

    public function getItem($key)
    {
        return $this->getItem($key);
    }

    /**
     * check if cache is expired *
     * @param $key
     * @return false
     * @throws \Psr\Cache\InvalidArgumentException
     */
    public function isExpired($key): bool
    {
        return !$this->instance->hasItem($key);
    }

    /**
     * clear cache *
     * @param $key
     * @return void
     * @throws InvalidArgumentException
     */
    public function clearCache($key = null)
    {
        if ($key)
            $this->instance->delete($key);
        else
            $this->instance->clear();

    }
}