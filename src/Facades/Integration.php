<?php

namespace Erdinhrmwn\RocketChat\Facades;

use Illuminate\Support\Facades\Facade;

class Integration extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rc-integration';
    }
}
