<?php

namespace MadeInItalySLC\WP\Provider;

use Illuminate\Config\Repository;
use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Psr\Container\ContainerInterface;

/**
 * Class RepositoryServiceProvider
 *
 * @package MadeInItalySLC\WP\Provider
 */
class RepositoryServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $c
     */
    public function register(Container $c)
    {
        $c['repo'] = $c->factory(function (ContainerInterface $c) {
            return new Repository();
        });
    }
}