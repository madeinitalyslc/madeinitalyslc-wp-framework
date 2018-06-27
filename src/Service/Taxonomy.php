<?php

namespace MadeInItalySLC\WP\Service;

use Illuminate\Contracts\Container\Container;
use MadeInItalySLC\WP\Contract\ContainerAwareInterface;
use MadeInItalySLC\WP\Contract\Service\TaxonomyInterface;
use MadeInItalySLC\WP\Traits\ContainerAwareTrait;

if (! class_exists(Taxonomy::class)) {
    /**
     * Class Taxonomy
     *
     * @package MadeInItalySLC\WP\Service
     */
    abstract class Taxonomy implements ContainerAwareInterface, TaxonomyInterface
    {
        use ContainerAwareTrait;

        /**
         * @return string
         */
        abstract public function getId();

        /**
         * @return array
         */
        abstract public function getPostTypes();

        /**
         * @return array
         */
        abstract public function getLabels();

        /**
         * @return array
         */
        abstract public function getArgs();

        /**
         * Taxonomy constructor.
         *
         * @param Container $c
         */
        public function __construct(Container $c)
        {
            $this->setContainer($c);
        }

        /**
         *
         */
        public function register()
        {
            $args = array_merge($this->getArgs(), [
                'labels' => $this->getLabels()
            ]);

            register_taxonomy($this->getId(), $this->getPostTypes(), $args);
        }

        /**
         * @todo implement tax query
         *
         * @param array $args
         * @return array|mixed
         */
        public function get(array $args = [])
        {
            return get_posts(array_merge($args, [
                'post_type' => $this->getId(),
                'posts_per_page' => -1
            ]));
        }
    }
}
