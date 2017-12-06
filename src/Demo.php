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

    /**
     * curl -XPOST -H'content-type:application/json' 'https://packagist.org/api/update-package?username=OMGZui&apiToken=AIWHAEhCxVfBvgPdltsM' -d'{"repository":{"url":"https://github.com/OMGZui/demo-sdk-for-Laravel5.5"}}'
     */
    public function getName()
    {
        return config('omgzui.name');
    }
}