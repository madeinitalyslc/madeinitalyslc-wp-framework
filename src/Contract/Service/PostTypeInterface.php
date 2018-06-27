<?php

namespace MadeInItalySLC\WP\Contract\Service;

if (! class_exists(PostTypeInterface::class)) {
    /**
     * Interface PostTypeInterface
     *
     * @package MadeInItalySLC\WP\Contract\Service
     */
    interface PostTypeInterface
    {
        /**
         * @return string
         */
        public function getId();

        /**
         * @return array
         */
        public function getLabels();

        /**
         * @return array
         */
        public function getArgs();

        /**
         *
         */
        public function register();
    }
}
