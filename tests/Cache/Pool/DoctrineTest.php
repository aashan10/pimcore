<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PEL
 */

namespace Pimcore\Tests\Cache\Pool;

use Cache\IntegrationTests\CachePoolTest;
use Pimcore\Cache\Pool\PimcoreCacheItemPoolInterface;
use Pimcore\Tests\Cache\Factory;
use Pimcore\Tests\Cache\Pool\Traits\CacheItemPoolTestTrait;

/**
 * @group cache.core.db
 */
class DoctrineTest extends CachePoolTest
{
    use CacheItemPoolTestTrait;

    /**
     * @return PimcoreCacheItemPoolInterface
     */
    protected function buildCachePool()
    {
        return (new Factory())->createDoctrineItemPool($this->defaultLifetime);
    }
}