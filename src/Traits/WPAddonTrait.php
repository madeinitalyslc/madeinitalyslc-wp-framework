<?php

namespace MadeInItalySLC\WP\Traits;

if (! class_exists(WPAddonTrait::class)) {
    /**
     * Trait WPAddonTrait
     *
     * @package MadeInItalySLC\WP\Traits
     */
    trait WPAddonTrait
    {
        use RepositoryTrait;

        /**
         * @param string $key
         * @param array|null $params
         * @return string
         */
        public function trans(string $key, array $params = null)
        {
            return (null !== $params) ?
                __(sprintf($key, ...$params), $this->repo('wp.text_domain')) :
                __($key, $this->config('wp.text_domain'));
        }
    }
}
