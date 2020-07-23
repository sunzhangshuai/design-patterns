<?php
/**
 * Validator.php :.
 *
 * PHP version 7.1
 *
 * @category Validator
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\ChainOfResponsibilities\Route\Validator;

use App\Behavioral\ChainOfResponsibilities\Route\Request;
use App\Behavioral\ChainOfResponsibilities\Route\Response;
use App\Behavioral\ChainOfResponsibilities\Route\RouteValidator;

/**
 * Interface Validator.
 */
interface Validator
{
    /**
     * 验证
     *
     * @param Request        $request
     * @param Response       $response
     *
     * @param RouteValidator $validator
     *
     * @return mixed
     */
    public function handle(Request $request, Response $response, RouteValidator $validator);
}
