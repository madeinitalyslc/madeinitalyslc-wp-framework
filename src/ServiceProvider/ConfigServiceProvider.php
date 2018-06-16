<?php

namespace MadeInItalySLC\WP\ServiceProvider;

use Illuminate\Config\Repository;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ConfigServiceProvider
 *
 * @package MadeInItalySLC\WP\ServiceProvider
 */
class ConfigServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     */
    public function register(Container $container)
    {
        $container['config'] = function (Container $c) {
            return new Repository();
        };
    }
}