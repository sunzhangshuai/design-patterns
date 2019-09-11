<?php
/**
 * ValueInterface.php :
 *
 * PHP version 7.1
 *
 * @category ValueInterface
 * @package  App\OtherPatterns\EAV
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\OtherPatterns\EAV;

/**
 * Value接口
 *
 * Interface ValueInterface
 *
 * @package App\OtherPatterns\EAV
 */
interface ValueInterface
{
    /**
     * ValueInterface constructor.
     *
     * @param Attribute $attribute
     */
    public function __construct(Attribute $attribute);

    /**
     * @param Attribute $attribute
     *
     * @return void
     */
    public function setAttribute(Attribute $attribute);

    /**
     * @return Attribute
     */
    public function getAttribute(): Attribute;
}
