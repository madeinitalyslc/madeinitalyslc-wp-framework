<?php

namespace MadeInItalySLC\WP\Traits;

/**
 * Trait ConfigTrait
 *
 * @package MadeInItalySLC\WP\Traits
 */
trait ConfigTrait
{
    /**
     * @param string $key
     * @param null|mixed $default
     * @return mixed
     */
    public function config(string $key, $default = null)
    {
        /** @var \Illuminate\Contracts\Config\Repository $config */
        $config = $this->get('config');

        return $config->get($key, $default);
    }
}