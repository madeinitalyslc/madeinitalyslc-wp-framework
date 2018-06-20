<?php

namespace MadeInItalySLC\WP\Traits;

use Illuminate\Contracts\Config\Repository;

/**
 * Trait WPConfigTrait
 *
 * @package MadeInItalySLC\WP\Traits
 */
trait WPConfigTrait
{
    /**
     * @param string $id
     * @param null|mixed $default
     * @return mixed
     */
    public function config(string $id, $default = null)
    {
        /** @var Repository $config */
        $config = $this->get('config');

        return $config->get($id, $default);
    }
}