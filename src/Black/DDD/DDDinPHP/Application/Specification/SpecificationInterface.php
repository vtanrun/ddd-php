<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre 'pocky' Balmes <alexandre@lablackroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\DDD\DDDinPHP\Application\Service;

/**
 * Interface SpecificationInterface
 *
 * @package Black\DDD\DDDinPHP\Application\Service
 */
interface SpecificationInterface
{
    public function isSatisfiedBy($object);
} 
