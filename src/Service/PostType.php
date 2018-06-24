<?php

namespace MadeInItalySLC\WP\Service;

use MadeInItalySLC\Toolbox\ContainerAwareTrait;
use MadeInItalySLC\Toolbox\Contract\ContainerAwareTraitInterface;
use Psr\Container\ContainerInterface;

/**
 * Class PostType
 *
 * @package MadeInItalySLC\WP\Service
 */
abstract class PostType implements ContainerAwareTraitInterface
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
     * @param ContainerInterface $c
     */
    public function __construct(ContainerInterface $c)
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