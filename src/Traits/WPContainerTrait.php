<?php

namespace MadeInItalySLC\WP\Traits;

use Pimple\Container;
use Psr\Container\ContainerInterface;

/**
 * Trait WPContainerTrait
 *
 * @package MadeInItalySLC\WP\Traits
 */
trait WPContainerTrait
{
    /**
     * @var ContainerInterface|Container|\Pimple\Psr11\Container
     */
    protected $container;

    /**
     * @return ContainerInterface|Container|\Pimple\Psr11\Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param ContainerInterface|Container|\Pimple\Psr11\Container $c
     */
    public function setContainer(ContainerInterface $c)
    {
        $this->container = $c;
    }
}