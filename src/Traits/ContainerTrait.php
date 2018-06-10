<?php

namespace MadeInItalySLC\WP\Traits;

use Illuminate\Contracts\Container\Container;

/**
 * Trait ContainerTrait
 *
 * @package MadeInItalySLC\WP\Traits
 */
trait ContainerTrait
{
    /**
     * @var null|Container
     */
    private $container = null;

    /**
     * ContainerTrait constructor.
     *
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->setContainer($container);
    }

    /**
     * @return null|Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param Container $container
     */
    public function setContainer(Container $container)
    {
        $this->container = $container;
    }
}