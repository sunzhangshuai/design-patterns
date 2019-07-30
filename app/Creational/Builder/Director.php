<?php

namespace App\Creational\Builder;

use App\Creational\Builder\Builders\BuilderInterface;

/**
 * 生产者
 *
 * Class Director
 *
 * @package App\Creational\Builder
 */
class Director
{
    /**
     * 制造车辆
     *
     * @param BuilderInterface $builder
     *
     * @return mixed
     */
    public function builder(BuilderInterface $builder)
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
