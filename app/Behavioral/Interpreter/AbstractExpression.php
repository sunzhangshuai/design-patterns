<?php
/**
 * AbstractExpression.php :
 *
 * PHP version 7.1
 *
 * @category AbstractExpression
 * @package  App\Behavioral\Interpreter
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Interpreter;

/**
 * 抽象表达式
 *
 * Interface AbstractExpression
 *
 * @package App\Behavioral\Interpreter
 */
interface AbstractExpression
{
    /**
     * 解释
     *
     * @param Context $context
     *
     * @return string
     */
    public function interpret(Context $context);
}
