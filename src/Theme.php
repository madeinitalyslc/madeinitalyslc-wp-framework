<?php

namespace MadeInItalySLC\WP;

/**
 * Class Theme
 *
 * @package MadeInItalySLC\WP
 */
abstract class Theme extends App
{
    /**
     * @return \WP_Theme
     */
    public function getInfo()
    {
        return wp_get_theme($this->getId());
    }
}