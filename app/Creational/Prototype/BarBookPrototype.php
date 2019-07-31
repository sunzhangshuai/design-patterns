<?php


namespace App\Creational\Prototype;


class BarBookPrototype extends BookPrototype
{
    protected $category = 'Bar';

    /**
     * 克隆方法
     */
    function __clone()
    {

    }
}
