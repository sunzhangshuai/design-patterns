<?php


namespace App\Structural\Decorator\Decorates;

/**
 * 皮鞋类
 *
 * Class Shoes
 *
 * @package App\Structural\Decorator\Decorates
 */
class Shoes extends Finery
{
    const FINERY = '皮鞋';

    public function show()
    {
        parent::show();
        echo self::FINERY . " ";
    }
}
