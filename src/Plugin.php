<?php

namespace MadeInItalySLC\WP;

use MadeInItalySLC\Toolbox\Application;
use MadeInItalySLC\WP\Contract\AddonInterface;
use MadeInItalySLC\WP\Traits\WPAddonTrait;

/**
 * Class Plugin
 *
 * @package MadeInItalySLC\WP
 */
abstract class Plugin extends Application implements AddonInterface
{
    use WPAddonTrait;

    /**
     * Plugin constructor.
     *
     * @param array $values
     */
    public function __construct(array $values = [])
    {
        parent::__construct();

        $this['wp.id'] = $this->getId();

        $this['wp.text_domain'] = $this->getTextDomain();

        foreach ($values as $key => $value) {
            $this[$key] = $value;
        }
    }
}