<?php

namespace MadeInItalySLC\WP\Traits;

use Pimple\Exception\InvalidServiceIdentifierException;

/**
 * Trait WPAddonTrait
 *
 * @package MadeInItalySLC\WP\Traits
 */
trait WPAddonTrait
{
    /**
     * @param string $key
     * @param array|null $params
     * @return string
     */
    public function trans(string $key, array $params = null)
    {
        if (! isset($this['wp.text_domain'])) {
            throw new InvalidServiceIdentifierException('wp.text_domain');
        }

        return (null !== $params) ? __(sprintf($key, ...$params), $this['wp.text_domain']) : __($key, $this['wp.text_domain']);
    }
}