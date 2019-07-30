<?php

namespace Tests\Unit;

use App\Creational\Multiton\Multiton;
use Tests\TestCase;

class MultitonTest extends TestCase
{
    /**
     * @group multiton
     *
     * @return void
     */
    public function testMultiton()
    {
        $instance_zs = Multiton::getInstance('zs');
        $instance_sc = Multiton::getInstance('sc');

        $instance_zs->name = 'zhangshuai';
        $instance_sc->name = 'sunchen';

        self::assertStringContainsString('zhangshuai', $instance_zs->name);
        self::assertStringContainsString('sunchen', $instance_sc->name);
    }
}
