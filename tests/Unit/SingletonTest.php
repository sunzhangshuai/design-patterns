<?php

namespace Tests\Unit;

use App\Creational\Singleton\Singleton;
use Tests\TestCase;

/**
 * 单例模式单元测试
 *
 * Class SingletonTest
 *
 * @package Tests\Unit
 */
class SingletonTest extends TestCase
{
    /**
     * @group singleton
     *
     * @return void
     */
    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
