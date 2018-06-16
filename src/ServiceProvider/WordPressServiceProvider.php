<?php

namespace MadeInItalySLC\WP\ServiceProvider;

use MadeInItalySLC\WP\Service\WordPress;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ConfigServiceProvider
 *
 * @package MadeInItalySLC\WP\ServiceProvider
 */
class WordPressServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     */
    public function register(Container $container)
    {
        $container['wp'] = function (Container $c) {
            return new WordPress($c);
        };
    }
}