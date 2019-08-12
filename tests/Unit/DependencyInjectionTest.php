<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Structural\DependencyInjection\DatabaseConnection;
use App\Structural\DependencyInjection\DatabaseConfiguration;

class DependencyInjectionTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @group dependencyInjection
     */
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        $connection = new DatabaseConnection($config);

        $this->assertEquals('domnikl:1234@localhost:3306', $connection->getDsn());
    }
}
