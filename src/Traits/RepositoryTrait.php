<?php

namespace MadeInItalySLC\WP\Traits;

use Illuminate\Config\Repository;
use Illuminate\Contracts\Config\Repository as RepositoryInterface;

/**
 * Trait RepositoryTrait
 *
 * @package MadeInItalySLC\WP\Traits
 */
if (! class_exists(RepositoryTrait::class)) {
    trait RepositoryTrait
    {
        /**
         * @var array
         */
        protected $repos;

        /**
         * @param string $key
         * @param array $values
         */
        public function setRepository(string $key, array $values = [])
        {
            $this->repos[$key] = new Repository($values);

            return $this->repos[$key];
        }

        /**
         * @param string $key
         * @return RepositoryInterface
         */
        public function getRepository(string $key) : RepositoryInterface
        {
            if (isset($this->repos[$key])) {
                $this->setRepository('config');
            }

            /** @var RepositoryInterface $repo */
            $repo = $this->repos[$key];

            return $repo->get($key);
        }

        /**
         * @param string $key
         * @param null|mixed $default
         * @return mixed
         */
        public function repo(string $repo, string $key = null, $default = null)
        {
            /** @var RepositoryInterface $repo */
            $repo = $this->getRepository($repo);

            return $repo->get($key, $default);
        }
    }
}
