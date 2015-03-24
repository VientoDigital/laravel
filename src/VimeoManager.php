<?php

/*
 * This file is part of Laravel Vimeo.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Vimeo;

use GrahamCampbell\Manager\AbstractManager;
use Illuminate\Contracts\Config\Repository;
use Vinkla\Vimeo\Factories\VimeoFactory;

/**
 * This is the Vimeo manager class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class VimeoManager extends AbstractManager
{
    /**
     * @var VimeoFactory
     */
    private $factory;

    /**
     * @param Repository $config
     * @param VimeoFactory $factory
     */
    public function __construct(Repository $config, VimeoFactory $factory)
    {
        parent::__construct($config);

        $this->factory = $factory;
    }

    /**
     * Create the connection instance.
     *
     * @param array $config
     *
     * @return mixed
     */
    protected function createConnection(array $config)
    {
        return $this->factory->make($config);
    }

    /**
     * Get the configuration name.
     *
     * @return string
     */
    protected function getConfigName()
    {
        return 'vimeo';
    }

    /**
     * Get the factory instance.
     *
     * @return VimeoFactory
     */
    public function getFactory()
    {
        return $this->factory;
    }
}
