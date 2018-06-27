<?php

namespace MadeInItalySLC\WP;

use Illuminate\Container\Container;
use MadeInItalySLC\WP\Contract\AddonInterface;
use MadeInItalySLC\WP\Traits;

if (! class_exists(Addon::class)) {
    /**
     * Class Addon
     *
     * @package MadeInItalySLC\WP
     */
    abstract class Addon extends Container implements AddonInterface
    {
        use Traits\WPAddonTrait, Traits\Repository;

        /**
         * Addon constructor.
         */
        public function __construct()
        {
            $this->('wp.id', function (Container $c) {
                return $this->getId();
            });

            $this->bind('wp.text_domain', function (Container $c) {
                return $this->getTextDomain();
            });
        }
    }
}
