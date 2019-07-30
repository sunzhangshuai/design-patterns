<?php

namespace Tests\Unit;

use App\Creational\AbstractFactory\DigitalProduct;
use App\Creational\AbstractFactory\ProductFactory;
use App\Creational\AbstractFactory\ShippableProduct;
use Tests\TestCase;

// phpunit --filter=testCanCreateDigitalProduct
// phpunit --group=abstractFactory

/**
 * 抽象工厂模式测试
 *
 * Class AbstractFactoryTest
 *
 * @package Tests\Unit
 */
class AbstractFactoryTest extends TestCase
{

    /**
     * A basic unit test example.
     *
     * @group abstractFactory
     * @return void
     */
    public function testCanCreateDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        $this->assertInstanceOf(DigitalProduct::class, $product);
    }

    /**
     * @group abstractFactory
     */
    public function testCanCreateShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        $this->assertInstanceOf(ShippableProduct::class, $product);
    }

    /**
     * @group abstractFactory
     */
    public function testCanCalculatePriceForDigitalProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createDigitalProduct(150);
        $this->assertEquals(150, $product->calculatePrice());
    }

    /**
     * @group abstractFactory
     */
    public function testCanCalculatePriceForShippableProduct()
    {
        $factory = new ProductFactory();
        $product = $factory->createShippableProduct(150);
        $this->assertEquals(200, $product->calculatePrice());
    }
}
