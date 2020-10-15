<?php

namespace Erdinhrmwn\RocketChat\Facades;

use Illuminate\Support\Facades\Facade;

class Livechat extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rc-livechat';
    }
}
