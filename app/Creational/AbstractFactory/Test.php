<?php


namespace AbstractFactory;

class Test
{
    public function testCanCreateDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        print_r($product);
    }
    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        print_r($product);
    }
    public function testCanCalculatePriceForDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        print_r($product->calculatePrice());
    }
    public function testCanCalculatePriceForShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        print_r($product->calculatePrice());
    }
}

$test = new Test();
print_r($test);die;
$test->testCanCalculatePriceForShippableProduct();
