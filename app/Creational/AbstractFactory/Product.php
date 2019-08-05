<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace App\Creational\AbstractFactory;

/**
 * 产品抽象类.
 *
 * Interface Product
 */
interface Product
{
    public function calculatePrice(): int;
}
