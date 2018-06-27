<?php

namespace MadeInItalySLC\WP;

use Illuminate\Config\Repository;
use Illuminate\Container\Container;
use MadeInItalySLC\WP\Contract\AddonInterface;
use MadeInItalySLC\WP\Traits\ConfigTrait;

if (! class_exists(Addon::class)) {
    /**
     * Class Addon
     *
     * @package MadeInItalySLC\WP
     */
    abstract class Addon extends Container implements AddonInterface
    {
        use ConfigTrait;

        /**
         * Addon constructor.
         */
        public function __construct()
        {
            $this->bindIf('config', function () {
                return new Repository();
            });
        }

        /**
         * @param string $key
         * @param array|null $params
         * @return string
         */
        public function trans(string $key, array $params = null) : string
        {
            return (null !== $params) ?
                __(sprintf($key, ...$params), $this->getTextDomain()) :
                __($key, $this->getTextDomain());
        }
    }
}
