<?php
/**
 * SpecificationInterface.php :
 *
 * PHP version 7.1
 *
 * @category SpecificationInterface
 * @package  App\Behavioral\Specification
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\Behavioral\Specification;

/**
 * 规格接口
 *
 * Interface SpecificationInterface
 *
 * @package App\Behavioral\Specification
 */
interface SpecificationInterface
{
    /**
     * 判断对象是否满足规格
     *
     * @param Item $item
     *
     * @return bool
     */
    public function isSatisfiedBy(Item $item);

    /**
     * 创建一个逻辑与规格（AND）
     *
     * @param SpecificationInterface $spec
     *
     * @return SpecificationInterface
     */
    public function plus(SpecificationInterface $spec);

    /**
     * 创建一个逻辑或规格（OR）
     *
     * @param SpecificationInterface $spec
     *
     * @return SpecificationInterface
     */
    public function either(SpecificationInterface $spec);

    /**
     * 创建一个逻辑非规格（NOT）
     *
     * @return SpecificationInterface
     */
    public function not();
}
