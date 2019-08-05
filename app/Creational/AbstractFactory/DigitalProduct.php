<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\AbstractFactory;

/**
 * 数码产品
 *
 * Class DigitalProduct
 */
class DigitalProduct implements Product
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function calculatePrice(): int
    {
        return $this->price;
    }
}
