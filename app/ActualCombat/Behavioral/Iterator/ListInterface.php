<?php
/**
 * ListInterface.php :.
 *
 * PHP version 7.1
 *
 * @category ListInterface
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */

namespace App\ActualCombat\Behavioral\Iterator;

interface ListInterface
{
    public function add($object);

    public function remove($object);

    public function iterator();
}
