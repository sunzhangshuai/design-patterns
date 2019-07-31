<?php


namespace App\Creational\FactoryMethod;

/**
 * 文件日志工厂
 *
 * Class FileLoggerFactory
 *
 * @package App\Creational\FactoryMethod
 */
class FileLoggerFactory implements LoggerFactory
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger()
    {
        return new FileLogger($this->filePath);
    }
}
