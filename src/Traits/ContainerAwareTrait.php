<?php

namespace MadeInItalySLC\WP\Traits;

use MadeInItalySLC\WP\Contract\ContainerInterface;

/**
 * Trait ContainerAwareTrait
 *
 * @package MadeInItalySLC\WP\Traits
 */
trait ContainerAwareTrait
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @return ContainerInterface
     */
    public function getContainer() : ContainerInterface
    {
        return $this->container;
    }

    /**
     * @param ContainerInterface $container
     * @return ContainerAwareTrait
     */
    public function setContainer(ContainerInterface $container) : self
    {
        $this->container = $container;
    }

    /**
     * @return bool
     */
    public function hasContainer() : bool
    {
        return ($this->container instanceof ContainerInterface);
    }
}