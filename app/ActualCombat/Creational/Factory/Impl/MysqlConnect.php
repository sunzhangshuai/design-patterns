<?php
/**
 * MysqlCnnect.php :
 *
 * PHP version 7.1
 *
 * @category MysqlCnnect
 * @package  App\ActualCombat\Creational\Factory\Impl
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Creational\Factory\Impl;


use App\ActualCombat\Creational\Factory\Interfaces\ConnectInterface;

class MysqlConnect implements ConnectInterface
{
    public function __construct()
    {
        echo self::class . '已创建' . PHP_EOL;
    }

    public function __toString() {
        return '这是' . self::class . PHP_EOL;
    }
}
