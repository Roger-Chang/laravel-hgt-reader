<?php
namespace SleepCat\LaravelHgtReader\Facades;

use Illuminate\Support\Facades\Facade;

class HgtReader extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'HgtReader';
    }
}