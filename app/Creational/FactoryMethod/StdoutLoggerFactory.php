<?php


namespace App\Creational\FactoryMethod;

/**
 * 标准输出日志工厂
 *
 * Class StdoutLoggerFactory
 *
 * @package App\Creational\FactoryMethod
 */
class StdoutLoggerFactory implements LoggerFactory
{

    public function createLogger()
    {
        return new StdoutLogger();
    }
}
