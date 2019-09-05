<?php
/**
 * MediatorInterface.php :
 *
 * PHP version 7.1
 *
 * @category MediatorInterface
 * @package  App\Behavioral\Mediator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Mediator;

/**
 * MediatorInterface是一个中介者契约。
 * 该接口不是强制的，但是使用它更加符合里氏替换原则。
 *
 * Interface MediatorInterface
 *
 * @package App\Behavioral\Mediator
 */
interface MediatorInterface
{
    /**
     * 发送响应
     *
     * @param string $content
     */
    public function sendResponse($content);

    /**
     * 发起请求
     */
    public function makeRequest();

    /**
     * 查询数据库
     */
    public function queryDb();
}
