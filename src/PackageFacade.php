<?php

namespace Dminustin\LSNE\TagsPackage;

use Illuminate\Support\Facades\Facade;

class PackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Package::PACKAGE_NAME;
    }
}
