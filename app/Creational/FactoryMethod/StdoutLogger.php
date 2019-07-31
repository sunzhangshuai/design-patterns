<?php


namespace App\Creational\FactoryMethod;

/**
 * 标准输出日志
 *
 * Class StdoutLogger
 *
 * @package App\Creational\FactoryMethod
 */
class StdoutLogger implements Logger
{

    public function log($message)
    {
        echo $message;
    }
}
