<?php
/**
 * CommandInterface.php :
 *
 * PHP version 7.1
 *
 * @category CommandInterface
 * @package  App\Behavioral\Command
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Command;

/**
 * 命令接口
 *
 * Interface CommandInterface
 *
 * @package App\Behavioral\Command
 */
interface CommandInterface
{
    /**
     * 命令执行
     *
     * @return void
     */
    public function execute();
}
