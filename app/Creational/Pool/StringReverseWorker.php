<?php


namespace App\Creational\Pool;

use DateTime;

/**
 * 字符串反转类
 *
 * Class StringReverseWorker
 *
 * @package App\Creational\Pool
 */
class StringReverseWorker
{

    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function run($text)
    {
        return strrev($text);
    }
}
