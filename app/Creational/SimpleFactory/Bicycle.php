<?php


namespace App\Creational\SimpleFactory;


class Bicycle
{
    public function driveTo($destination)
    {
        return '驶向' . $destination;
    }
}
