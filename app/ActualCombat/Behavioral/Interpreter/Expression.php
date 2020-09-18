<?php
/**
 * Expression.php :.
 *
 * PHP version 7.1
 *
 * @category Expression
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Interpreter;

interface Expression
{
    public function __construct($ruleExpression);

    public function interpreter($stats);
}
