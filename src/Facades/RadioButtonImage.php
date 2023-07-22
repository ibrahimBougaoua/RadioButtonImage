<?php

namespace IbrahimBougaoua\RadioButtonImage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IbrahimBougaoua\RadioButtonImage\RadioButtonImage
 */
class RadioButtonImage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \IbrahimBougaoua\RadioButtonImage\RadioButtonImage::class;
    }
}
