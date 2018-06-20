<?php

namespace MadeInItalySLC\WP\Traits;

use Illuminate\Contracts\Config\Repository;

/**
 * Trait WPRepositoryTrait
 *
 * @package MadeInItalySLC\WP\Traits
 */
trait WPRepositoryTrait
{
    /**
     * @param string $repo
     * @param string|null $id
     * @param null|mixed $default
     * @return Repository|mixed|string
     */
    public function repo(string $repo, string $id = null, $default = null)
    {
        /** @var Repository $repo */
        $repo = $this->get('repo')->get($repo);

        if (null === $id) {
            return $repo;
        }

        return $repo->get($id, $default);
    }
}