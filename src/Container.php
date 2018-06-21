<?php

namespace MadeInItalySLC\WP;

use MadeInItalySLC\WP\Contract\ContainerInterface;
use Pimple\Container as PimpleContainer;

/**
 * Class Application
 *
 * @package MadeInItalySLC\WP
 */
class Container extends PimpleContainer implements ContainerInterface
{
    /**
     * @param string $id
     * @param null|mixed $default
     * @return mixed|null
     */
    public function get(string $id, $default = null)
    {
        return ($this->has($id)) ? $this->offsetGet($id) : $default;
    }

    /**
     * @param string $id
     * @return bool
     */
    public function has(string $id) : bool
    {
        return $this->offsetExists($id);
    }

    /**
     * @param string $id
     * @param $value
     */
    public function set(string $id, $value) : void
    {
        $this->offsetSet($id, $value);
    }
}