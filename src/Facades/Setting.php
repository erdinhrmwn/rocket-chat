<?php

namespace Erdinhrmwn\RocketChat\Facades;

use Illuminate\Support\Facades\Facade;

class Setting extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rc-setting';
    }
}
