<?php

namespace MadeInItalySLC\WP\Traits;

use MadeInItalySLC\WP\WPContainer;

/**
 * Trait WPContainerTrait
 *
 * @package MadeInItalySLC\WP\Traits
 */
trait WPContainerTrait
{
    /**
     * @var WPContainer
     */
    protected $container;

    /**
     * @return WPContainer
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param WPContainer $WPContainer
     */
    public function setContainer(WPContainer $WPContainer): void
    {
        $this->container = $WPContainer;
    }
}