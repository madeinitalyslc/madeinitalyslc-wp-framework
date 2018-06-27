<?php

namespace MadeInItalySLC\WP\Contract;

use Illuminate\Contracts\Container\Container as ContainerInterface;

if (! class_exists(AddonInterface::class)) {
    /**
     * Interface AddonInterface
     *
     * @package MadeInItalySLC\WP\Contract
     */
    interface AddonInterface extends ContainerInterface, ConfigTraitInterface
    {
        /**
         * @return string
         */
        public function getId() : string;

        /**
         * @return string
         */
        public function getTextDomain() : string;

        /**
         * @param string $key
         * @param array|null $params
         * @return string
         */
        public function trans(string $key, array $params = null) : string;
    }
}
