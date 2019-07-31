<?php


namespace App\Creational\Prototype;


class FooBookPrototype extends BookPrototype
{

    protected $category = 'Foo';

    /**
     * 克隆方法
     */
    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
