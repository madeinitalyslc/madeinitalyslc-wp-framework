<?php

namespace MadeInItalySLC\WP\Contract;

/**
 * Interface ServiceProviderInterface
 *
 * @package MadeInItalySLC\WP\Contract
 */
interface ServiceProviderInterface
{
    /**
     * @param ContainerInterface $container
     * @return mixed
     */
    public function register(ContainerInterface $container);
}