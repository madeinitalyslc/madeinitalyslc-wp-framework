<?php

namespace MadeInItalySLC\WP;

use Pimple\Container;

/**
 * Class WPContainer
 *
 * @package MadeInItalySLC\WP
 */
class WPContainer extends Container
{
    /**
     * @param string $id
     * @return bool
     */
    public function has(string $id)
    {
        return $this->offsetExists($id);
    }

    /**
     * @param string $id
     * @return mixed|null
     */
    public function get(string $id)
    {
        return ($this->has($id)) ? $this->offsetGet($id) : null;
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