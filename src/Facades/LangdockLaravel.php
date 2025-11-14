<?php

namespace Hwkdo\LangdockLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
    * @see \Hwkdo\LangdockLaravel\LangdockLaravel
 */
class LangdockLaravel extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Hwkdo\LangdockLaravel\LangdockLaravel::class;
    }
}
