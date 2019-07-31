<?php

namespace Tests\Unit;

use App\Creational\FactoryMethod\FileLogger;
use App\Creational\FactoryMethod\FileLoggerFactory;
use App\Creational\FactoryMethod\StdoutLogger;
use App\Creational\FactoryMethod\StdoutLoggerFactory;
use Tests\TestCase;

class FactoryMethodTest extends TestCase
{

    /**
     * @group factoryMethod
     */
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    /**
     * @group factoryMethod
     */
    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
