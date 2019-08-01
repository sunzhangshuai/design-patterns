<?php

namespace Tests\Unit;

use App\Structural\Proxy\RecordProxy;
use Tests\TestCase;

/**
 * 代理模式单元测试
 *
 * Class ProxyTest
 *
 * @package Tests\Unit
 */
class ProxyTest extends TestCase
{
    /**
     * @group proxy
     *
     * @return void
     */
    public function testSetAttribute(){
        $data = [];
        $proxy = new RecordProxy($data);
        $proxy->xyz = false;
        $this->assertTrue($proxy->xyz===false);
    }
}
