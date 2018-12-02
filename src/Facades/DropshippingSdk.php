<?php

namespace Aliexpress\DropshippingSdk\Facades;

use Illuminate\Support\Facades\Facade;

class DropshippingSdk extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dropshippingsdk';
    }
}
