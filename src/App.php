<?php

namespace MadeInItalySLC\WP;

use Illuminate\Config\Repository;
use Illuminate\Container\Container;

/**
 * Class App
 *
 * @package MadeInItalySLC\WP
 */
abstract class App extends Container
{
    /**
     * @param string|array $key
     * @param null|mixed $default
     * @return bool|mixed
     */
    public function config($key, $default = null)
    {
        if (! $this->get('config')) {
            $this->singleton('config', function (App $app) {
                return new Repository();
            });
        }

        /** @var Repository $c */
        $c = $this->get('config');

        if (is_array($key)) {
            $c->set($key);

            return true;
        } else {
            return ($c->has($key)) ? $c->get($key) : $default;
        }
    }

    /**
     * @param string $key
     * @param array|null $params
     * @return string
     */
    public function trans(string $key, array $params = null)
    {
        return (null !== $params) ? __(sprintf($key, ...$params), $this->getTextDomain()) : __($key, $this->getTextDomain());
    }
}