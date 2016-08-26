<?php
namespace Svfnix\Xcrud\Facades;

use Illuminate\Support\Facades\Facade;

class Xcrud extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'xcrud';
    }

}
