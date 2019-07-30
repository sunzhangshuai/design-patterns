<?php

namespace Tests\Unit;

use App\Creational\StaticFactory\FormatNumber;
use App\Creational\StaticFactory\FormatString;
use App\Creational\StaticFactory\StaticFactory;
use InvalidArgumentException;
use Tests\TestCase;

class StaticFactoryTest extends TestCase
{
    /**
     * @group staticFactory
     */
    public function testCanCreateNumberFormatter()
    {
        $this->assertInstanceOf(
            FormatNumber::class,
            StaticFactory::factory('number')
        );
    }

    /**
     * @group staticFactory
     */
    public function testCanCreateStringFormatter()
    {
        $this->assertInstanceOf(
            FormatString::class,
            StaticFactory::factory('string')
        );
    }

    /**
     * @group staticFactory
     * @expectedException InvalidArgumentException
     */
    public function testException()
    {
        StaticFactory::factory('object');
    }
}
