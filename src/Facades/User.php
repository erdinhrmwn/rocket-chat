<?php

namespace Erdinhrmwn\RocketChat\Facades;

use Illuminate\Support\Facades\Facade;

class User extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rc-user';
    }
}
