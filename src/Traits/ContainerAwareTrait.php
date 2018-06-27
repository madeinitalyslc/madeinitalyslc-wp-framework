<?php

namespace MadeInItalySLC\WP\Traits;

use Illuminate\Contracts\Container\Container;

if (! class_exists(ContainerAwareTrait::class)) {
    /**
     * Trait ContainerAwareTrait
     *
     * @package MadeInItalySLC\WP\Traits
     */
    trait ContainerAwareTrait
    {
        /**
         * @var Container
         */
        protected $container;

        /**
         * @param Container $container
         */
        public function setContainer(Container $container)
        {
            $this->container = $container;
        }

        /**
         * @return Container
         */
        public function getContainer() : Container
        {
            return $this->container;
        }
    }
}
