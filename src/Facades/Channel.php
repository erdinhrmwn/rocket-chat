<?php

namespace Erdinhrmwn\RocketChat\Facades;

use Illuminate\Support\Facades\Facade;

class Channel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rc-channel';
    }
}
