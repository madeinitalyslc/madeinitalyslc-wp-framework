<?php

namespace MadeInItalySLC\WP\ServiceProvider;

use Illuminate\Config\Repository;
use MadeInItalySLC\WP\Contract\ContainerInterface;
use MadeInItalySLC\WP\Contract\ServiceProviderInterface;

/**
 * Class ConfigServiceProvider
 *
 * @package MadeInItalySLC\WP\Provider
 */
class ConfigServiceProvider implements ServiceProviderInterface
{
    /**
     * @param ContainerInterface $container
     * @return ConfigServiceProvider
     */
    public function register(ContainerInterface $container) : self
    {
        $container->set('config', function (ContainerInterface $c) {
            return new Repository();
        });

        return $this;
    }
}