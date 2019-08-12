<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use Tests\TestCase;
use App\Creational\AbstractFactory\Factories\AccessFactory;
use App\Creational\AbstractFactory\Factories\SqlserverFactory;

// phpunit --filter=testCanCreateDigitalProduct
// phpunit --group=abstractFactory

/**
 * 抽象工厂模式测试.
 *
 * Class AbstractFactoryTest
 */
class AbstractFactoryTest extends TestCase
{
    /**
     * @group abstractFactory
     */
    public function testSqlserverInsertUser()
    {
        $factory = new SqlserverFactory();
        $product = $factory->createUser();
        $this->assertStringContainsString('往SQL Server中的User表添加一条记录', $product->insert());
    }

    /**
     * @group abstractFactory
     */
    public function testSqlserverGetUser()
    {
        $factory = new SqlserverFactory();
        $product = $factory->createUser();
        $this->assertStringContainsString('根据id得到SQL Server中User表一条记录', $product->getUser());
    }

    /**
     * @group abstractFactory
     */
    public function testAccessInsertUser()
    {
        $factory = new AccessFactory();
        $product = $factory->createUser();
        $this->assertStringContainsString('往Access Server中的User表添加一条记录', $product->insert());
    }

    /**
     * @group abstractFactory
     */
    public function testAccessGetUser()
    {
        $factory = new AccessFactory();
        $product = $factory->createUser();
        $this->assertStringContainsString('根据id得到Access Server中User表一条记录', $product->getUser());
    }

    /**
     * @group abstractFactory
     */
    public function testSqlserverInsertDepartment()
    {
        $factory = new SqlserverFactory();
        $product = $factory->createDepartment();
        $this->assertStringContainsString('往SQL Server中的Department表添加一条记录', $product->insert());
    }

    /**
     * @group abstractFactory
     */
    public function testSqlserverGetDepartment()
    {
        $factory = new SqlserverFactory();
        $product = $factory->createDepartment();
        $this->assertStringContainsString('根据id得到SQL Server中Department表一条记录', $product->getDepartment());
    }

    /**
     * @group abstractFactory
     */
    public function testAccessInsertDepartment()
    {
        $factory = new AccessFactory();
        $product = $factory->createDepartment();
        $this->assertStringContainsString('往Access Server中的Department表添加一条记录', $product->insert());
    }

    /**
     * @group abstractFactory
     */
    public function testAccessGetDepartment()
    {
        $factory = new AccessFactory();
        $product = $factory->createDepartment();
        $this->assertStringContainsString('根据id得到Access Server中Department表一条记录', $product->getDepartment());
    }
}
