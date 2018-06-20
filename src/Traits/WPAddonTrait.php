<?php

namespace MadeInItalySLC\WP\Traits;

use Illuminate\Contracts\Config\Repository;

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
        /** @var Repository $config */
        $config = $this->get('config');

        return (null !== $params) ? __(sprintf($key, ...$params), $config->get('wp.text_domain')) : __($key, $config->get('wp.text_domain'));
    }
}