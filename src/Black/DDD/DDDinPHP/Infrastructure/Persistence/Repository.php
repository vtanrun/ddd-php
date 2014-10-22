<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Infrastructure\Persistence;

/**
 * Interface Repository
 *
 * Mediates between the domain and data mapping layers using a collection-like interface for accessing domain objects.
 *
 * @see     http://martinfowler.com/eaaCatalog/repository.html
 *
 * @author  Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
interface Repository
{
    public function findAll();
}
