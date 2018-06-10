<?php

namespace MadeInItalySLC\WP\Service;

use MadeInItalySLC\WP\Traits\ContainerTrait;

/**
 * Class PostType
 *
 * @package MadeInItalySLC\WP\Service
 */
abstract class PostType
{
    use ContainerTrait;

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