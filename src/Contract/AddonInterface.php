<?php

namespace MadeInItalySLC\WP\Contract;

if (! class_exists(AddonInterface::class)) {
    /**
     * Interface AddonInterface
     *
     * @package MadeInItalySLC\WP\Contract
     */
    interface AddonInterface
    {
        /**
         * @return string
         */
        public function getId() : string;

        /**
         * @return string
         */
        public function getTextDomain() : string;
    }
}
