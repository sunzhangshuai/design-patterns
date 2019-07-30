<?php

namespace Tests\Unit;

use App\Creational\Builder\Builders\CarBuilder;
use App\Creational\Builder\Builders\TruckBuilder;
use App\Creational\Builder\Director;
use App\Creational\Builder\Products\Car;
use App\Creational\Builder\Products\Truck;
use Tests\TestCase;

/**
 * 建造者模式测试
 *
 * Class BuilderTest
 *
 * @package Tests\Unit
 */
class BuilderTest extends TestCase
{
    /**
     * 卡车制造测试
     *
     * @group builder
     */
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();

        $truck = (new Director())->builder($truckBuilder);

        $this->assertInstanceOf(Truck::class, $truck);
    }

    /**
     * 汽车制造测试
     *
     * @group builder
     */
    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();

        $truck = (new Director())->builder($carBuilder);

        $this->assertInstanceOf(Car::class, $truck);
    }
}
