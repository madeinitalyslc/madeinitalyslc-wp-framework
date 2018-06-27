<?php

namespace MadeInItalySLC\WP\Contract\Service;

if (! class_exists(TaxonomyInterface::class)) {
    /**
     * Interface TaxonomyInterface
     *
     * @package MadeInItalySLC\WP\Contract\Service
     */
    interface TaxonomyInterface
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
         * @return array
         */
        public function getPostTypes();

        /**
         *
         */
        public function register();
    }
}
