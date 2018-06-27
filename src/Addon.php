<?php

namespace MadeInItalySLC\WP;

use Illuminate\Config\Repository;
use Illuminate\Container\Container;
use MadeInItalySLC\WP\Contract\AddonInterface;
use MadeInItalySLC\WP\Traits\ConfigTrait;
use MadeInItalySLC\WP\Traits\WPAddonTrait;

if (! class_exists(Addon::class)) {
    /**
     * Class Addon
     *
     * @package MadeInItalySLC\WP
     */
    abstract class Addon extends Container implements AddonInterface
    {
        use ConfigTrait, WPAddonTrait;

        /**
         * Addon constructor.
         */
        public function __construct()
        {
            $this->bindIf('config', function () {
                return new Repository();
            });
        }


    }
}
