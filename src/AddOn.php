<?php

namespace MadeInItalySLC\WP;

/**
 * Class AddOn
 *
 * @package MadeInItalySLC\WP
 */
abstract class AddOn extends App
{
    /**
     * @return string
     */
    abstract public function getId();

    /**
     * @return string
     */
    abstract public function getTextDomain();
}