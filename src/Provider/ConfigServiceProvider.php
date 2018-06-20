<?php

namespace MadeInItalySLC\WP\Provider;

use Illuminate\Config\Repository;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Psr\Container\ContainerInterface;

/**
 * Class ConfigServiceProvider
 *
 * @package MadeInItalySLC\WP\Provider
 */
class ConfigServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $c
     */
    public function register(Container $c)
    {
        $c['config'] = function (ContainerInterface $c) {
            return new Repository();
        };
    }
}