<?php


namespace App\Creational\AbstractFactory;

/**
 * 运输类产品
 *
 * Class ShippableProduct
 *
 * @package AbstractFactory
 */
class ShippableProduct implements Product
{
    // 产品价格
    private $productPrice;

    // 运输价格
    private $shippingPrice;

    public function __construct($productPrice, $shippingPrice)
    {
        $this->productPrice = $productPrice;
        $this->shippingPrice = $shippingPrice;
    }


    public function calculatePrice(): int
    {
        return $this->productPrice + $this->shippingPrice;
    }
}
