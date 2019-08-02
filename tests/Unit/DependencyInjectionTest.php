<?php

namespace Tests\Unit;

use App\Structural\DependencyInjection\DatabaseConfiguration;
use App\Structural\DependencyInjection\DatabaseConnection;
use Tests\TestCase;

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
