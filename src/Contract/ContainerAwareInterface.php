<?php

namespace MadeInItalySLC\WP\Contract;

/**
 * Interface ContainerAwareInterface
 *
 * @package MadeInItalySLC\WP\Contract
 */
interface ContainerAwareInterface
{
    /**
     * @param ContainerInterface $container
     * @return ContainerAwareInterface
     */
    public function setContainer(ContainerInterface $container) : self;

    /**
     * @return ContainerInterface
     */
    public function getContainer() : ContainerInterface;

    /**
     * @return bool
     */
    public function hasContainer() : bool;
}