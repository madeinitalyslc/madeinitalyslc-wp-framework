<?php

namespace MadeInItalySLC\WP;

use Pimple\Container;
use Psr\Container\ContainerInterface;

/**
 * Class WPApp
 *
 * @package MadeInItalySLC\WP
 */
abstract class WPApp extends Container implements ContainerInterface
{
    /**
     * @param string $id
     * @return mixed|null
     */
    public function get($id)
    {
        return ($this->has($id)) ? $this->offsetGet($id) : null;
    }

    /**
     * @param string $id
     * @return bool
     */
    public function has($id)
    {
        return $this->offsetExists($id);
    }

    /**
     * @param string $id
     * @param $value
     */
    public function set(string $id, $value)
    {
        $this->offsetSet($id, $value);
    }
}