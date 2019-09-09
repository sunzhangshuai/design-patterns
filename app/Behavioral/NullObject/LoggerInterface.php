<?php
/**
 * LoggerInterface.php :
 *
 * PHP version 7.1
 *
 * @category LoggerInterface
 * @package  App\Behavioral\NullObject
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\NullObject;

/**
 * LoggerInterface 是 logger 接口
 * 核心特性: NullLogger必须和其它Logger一样实现这个接口
 *
 * Interface LoggerInterface
 *
 * @package App\Behavioral\NullObject
 */
interface LoggerInterface
{
    /**
     * @param string $str
     *
     * @return void
     */
    public function log($str);
}
