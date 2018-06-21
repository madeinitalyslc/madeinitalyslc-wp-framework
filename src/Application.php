<?php

namespace MadeInItalySLC\WP;

use MadeInItalySLC\WP\Contract\ApplicationInterface;
use MadeInItalySLC\WP\Contract\ContainerInterface;
use MadeInItalySLC\WP\Contract\ServiceProviderInterface;

/**
 * Class Application
 *
 * @package MadeInItalySLC\WP
 */
class Application extends Container implements ApplicationInterface
{
    /**
     * @param ServiceProviderInterface $provider
     * @param array $values
     * @return ContainerInterface
     */
    public function addServiceProvider(ServiceProviderInterface $provider, array $values = []) : ContainerInterface
    {
        $provider->register($this);

        foreach ($values as $key => $value) {
            $this->set($key, $value);
        }

        return $this;
    }
}