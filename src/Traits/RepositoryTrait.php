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
         * @return RepositoryInterface
         */
        public function setRepository(string $key, array $values = []) : RepositoryInterface
        {
            $this->repos[$key] = new Repository($values);

            return $this->getRepository($key);
        }

        /**
         * @param string $repo
         * @return null|RepositoryInterface
         */
        public function getRepository(string $repo) : RepositoryInterface
        {
            if (! isset($this->repos[$repo])) {
                $this->setRepository($repo);
            }

            // todo made a fix for error when repo not isset
            return $this->repos[$repo];
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
