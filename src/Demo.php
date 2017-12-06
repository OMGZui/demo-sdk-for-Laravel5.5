<?php
/**
 * Created by PhpStorm.
 * User: shengj
 * Date: 2017/12/6
 * Time: 11:31
 */

namespace OMGZui\OMGZui;

class Demo
{
    protected $items = [];

    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    public function getName()
    {
        echo config('omgzui.name');
    }
}