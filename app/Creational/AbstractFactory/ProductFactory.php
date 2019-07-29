<?php


namespace App\Creational\AbstractFactory;

/**
 * 产品工厂
 *
 * Class ProductFactory
 *
 * @package AbstractFactory
 */
class ProductFactory
{
    // 运费
    private const SHIPPING_COSTS = 50;

    /**
     * 创建运输类产品
     *
     * @param $price
     *
     * @return ShippableProduct
     */
    public function createShippableProduct($price)
    {
        return new ShippableProduct($price, self::SHIPPING_COSTS);
    }

    /**
     * 创建数码产品
     *
     * @param $price
     *
     * @return DigitalProduct
     */
    public function createDigitalProduct($price)
    {
        return new DigitalProduct($price);
    }
}
