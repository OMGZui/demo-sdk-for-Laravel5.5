<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/12/6
 * Time: 11:24
 */
namespace OMGZui\OMGZui\Facades;

use Illuminate\Support\Facades\Facade;

class OMGZui extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'omgzui';
    }
}