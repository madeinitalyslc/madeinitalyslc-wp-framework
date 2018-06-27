<?php

namespace MadeInItalySLC\WP\Service;

use Illuminate\Contracts\Container\Container;
use MadeInItalySLC\WP\Contract\ContainerAwareInterface;
use MadeInItalySLC\WP\Contract\Service\PostTypeInterface;
use MadeInItalySLC\WP\Traits\ContainerAwareTrait;

if (! class_exists(PostType::class)) {
    /**
     * Class PostType
     *
     * @package MadeInItalySLC\WP\Service
     */
    abstract class PostType implements ContainerAwareInterface, PostTypeInterface
    {
        use ContainerAwareTrait;

        /**
         * @return string
         */
        abstract public function getId();

        /**
         * @return array
         */
        abstract public function getLabels();

        /**
         * @return array
         */
        abstract public function getArgs();

        /**
         * PostType constructor.
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

            register_post_type($this->getId(), $args);
        }

        /**
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
