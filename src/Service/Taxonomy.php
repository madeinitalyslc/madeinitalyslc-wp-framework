<?php

namespace MadeInItalySLC\WP\Service;

use MadeInItalySLC\WP\Traits\WPContainerTrait;
use MadeInItalySLC\WP\WPContainer;

/**
 * Class Taxonomy
 *
 * @package MadeInItalySLC\WP\Service
 */
abstract class Taxonomy
{
    use WPContainerTrait;

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
     * @param WPContainer $WPContainer
     */
    public function __construct(WPContainer $WPContainer)
    {
        $this->setContainer($WPContainer);
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