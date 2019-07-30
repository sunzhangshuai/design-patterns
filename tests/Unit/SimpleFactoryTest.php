<?php

namespace Tests\Unit;

use App\Creational\SimpleFactory\Bicycle;
use App\Creational\SimpleFactory\SimpleFactory;
use Tests\TestCase;

/**
 * 简单工厂模式测试
 *
 * Class SimpleFactoryTest
 *
 * @package Tests\Unit
 */
class SimpleFactoryTest extends TestCase
{
    /**
     * @group simpleFactory
     *
     * @return void
     */
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }

    /**
     * @group simpleFactory
     *
     * @return void
     */
    public function testBicycleDrive()
    {
        $bicycle = (new SimpleFactory())->createBicycle();

        $destination = '老家';
        $this->assertStringContainsString('驶向' . $destination, $bicycle->driveTo($destination));
    }
}
