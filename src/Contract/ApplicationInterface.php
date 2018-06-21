<?php

namespace MadeInItalySLC\WP\Contract;

/**
 * Interface ApplicationInterface
 *
 * @package MadeInItalySLC\WP\Contract
 */
interface ApplicationInterface extends ContainerInterface
{
    /**
     * @param ServiceProviderInterface $provider
     * @return ContainerInterface
     */
    public function addServiceProvider(ServiceProviderInterface $provider) : ContainerInterface;
}