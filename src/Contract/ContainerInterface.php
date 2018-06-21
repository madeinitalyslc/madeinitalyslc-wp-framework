<?php

namespace MadeInItalySLC\WP\Contract;

/**
 * Interface ContainerInterface
 *
 * @package MadeInItalySLC\WP\Contract
 */
interface ContainerInterface
{
    /**
     * @param string $key
     * @param null|mixed $default
     * @return mixed
     */
    public function get(string $key, $default = null);

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key) : bool;

    /**
     * @param string $key
     * @param $value
     */
    public function set(string $key, $value) : void;
}