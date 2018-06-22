<?php

namespace MadeInItalySLC\WP\Contract;

/**
 * Interface AddonInterface
 *
 * @package MadeInItalySLC\WP\Contract
 */
interface AddonInterface
{
    /**
     * @return string
     */
    public function getId() : string;

    /**
     * @return string
     */
    public function getTextDomain() : string;
}