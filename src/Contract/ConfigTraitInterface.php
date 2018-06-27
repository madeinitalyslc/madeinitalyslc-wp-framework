<?php

namespace MadeInItalySLC\WP\Contract;

/**
 * Interface ConfigTraitInterface
 *
 * @package MadeInItalySLC\WP\Contract
 */
interface ConfigTraitInterface
{
    /**
     * @param string $key
     * @param null|mixed $default
     * @return mixed
     */
    public function config(string $key, $default = null);
}