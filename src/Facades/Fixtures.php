<?php

namespace Alnutile\Fixtures\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Alnutile\Fixtures\Fixtures
 */
class Fixtures extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Alnutile\Fixtures\Fixtures::class;
    }
}
