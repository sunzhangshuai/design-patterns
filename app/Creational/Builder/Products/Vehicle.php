<?php


namespace App\Creational\Builder\Products;

/**
 * 车辆类
 *
 * Class Vehicle
 *
 * @package App\Creational\Builder
 */
abstract class Vehicle
{
    private $data = [];

    /**
     * 增加部件
     *
     * @param $key
     * @param $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}
