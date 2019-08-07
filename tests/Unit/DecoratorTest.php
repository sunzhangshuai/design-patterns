<?php

namespace Tests\Unit;

use App\Structural\Decorator\Decorates\BigTrouser;
use App\Structural\Decorator\Decorates\Shoes;
use App\Structural\Decorator\Decorates\TShirts;
use App\Structural\Decorator\Decorates\Underwear;
use App\Structural\Decorator\Persons\SuperMan;
use Tests\TestCase;

class DecoratorTest extends TestCase
{
    /**
     * @group decorator
     */
    public function testSuperMan()
    {
        $person = new SuperMan('张帅');
        $this->assertEquals('飞', $person->fly());
    }

    /**
     * 装扮测试.
     *
     * @group decorator
     */
    public function testDecorate()
    {
        $person = new SuperMan('张帅');

        $bigTrouser = new BigTrouser();
        $shoes = new Shoes();
        $tShirts = new TShirts();
        $underwear = new Underwear();

        $bigTrouser->decorate($person);
        $shoes->decorate($bigTrouser);
        $tShirts->decorate($shoes);
        $underwear->decorate($tShirts);

        $underwear->show();

        $this->expectOutputString('张帅穿了垮裤 皮鞋 大T恤 袜子 ');
    }
}
