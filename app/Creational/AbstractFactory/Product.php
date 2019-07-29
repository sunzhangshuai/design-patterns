<?php


namespace App\Creational\AbstractFactory;

/**
 * 产品抽象类
 *
 * Interface Product
 *
 * @package AbstractFactory
 */
interface Product
{
    public function calculatePrice(): int;
}
