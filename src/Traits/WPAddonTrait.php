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
        if (! $this->has('wp.text_domain')) {
            throw new InvalidServiceIdentifierException('wp.text_domain');
        }

        return (null !== $params) ?
            __(sprintf($key, ...$params), $this->get('wp.text_domain')) :
            __($key, $this->get('wp.text_domain'));
    }
}