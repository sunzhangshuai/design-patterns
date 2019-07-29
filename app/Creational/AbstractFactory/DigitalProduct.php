<?php


namespace App\Creational\AbstractFactory;

/**
 * 数码产品
 *
 * Class DigitalProduct
 *
 * @package AbstractFactory
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
