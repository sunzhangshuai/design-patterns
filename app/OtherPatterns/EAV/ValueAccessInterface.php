<?php
/**
 * ValueAccessInterface.php :
 *
 * PHP version 7.1
 *
 * @category ValueAccessInterface
 * @package  App\OtherPatterns\EAV
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\OtherPatterns\EAV;

/**
 * 值访问接口
 *
 * Interface ValueAccessInterface
 *
 * @package App\OtherPatterns\EAV
 */
interface ValueAccessInterface
{
    /**
     * @return mixed
     */
    public function getValues();

    /**
     * @param ValueInterface $value
     *
     * @return void
     */
    public function addValue(ValueInterface $value);

    /**
     * @param ValueInterface $value
     *
     * @return void
     */
    public function removeValue(ValueInterface $value);
}
