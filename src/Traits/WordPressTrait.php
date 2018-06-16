<?php

namespace MadeInItalySLC\WP\Traits;

/**
 * Trait WordPressTrait
 *
 * @package MadeInItalySLC\WP\Traits
 */
trait WordPressTrait
{
    /**
     * @param string $key
     * @param array|null $params
     * @return string
     */
    public function trans(string $key, array $params = null)
    {
        return (null !== $params) ? __(sprintf($key, ...$params), $this['wp.text_domain']) : __($key, $this['wp.text_domain']);
    }
}