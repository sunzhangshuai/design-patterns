<?php


namespace App\Structural\Decorator\Decorates;

/**
 * 垮裤
 *
 * Class BigTrouser
 *
 * @package App\Structural\Decorator\Decorates
 */
class BigTrouser extends Finery
{
    const FINERY = '垮裤';

    public function show()
    {
        parent::show();
        echo self::FINERY . " ";
    }
}
