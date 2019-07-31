<?php


namespace App\Creational\FactoryMethod;

/**
 * 文件日志
 *
 * Class FileLogger
 *
 * @package App\Creational\FactoryMethod
 */
class FileLogger implements Logger
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function log($message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}
