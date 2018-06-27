<?php

namespace MadeInItalySLC\WP\Contract;

use Illuminate\Contracts\Container\Container;

if (! class_exists(ContainerAwareInterface::class)) {
    /**
     * Interface ContainerAwareInterface
     *
     * @package MadeInItalySLC\WP\Contract
     */
    interface ContainerAwareInterface
    {
        /**
         * @param Container $container
         */
        public function setContainer(Container $container);

        /**
         * @return Container
         */
        public function getContainer() : Container;
    }
}
