<?php

/*
 * 设计模式
 *
 * author 张帅
 */

namespace Tests\Unit;

use App\Structural\Proxy\RecordProxy;
use Tests\TestCase;

/**
 * 代理模式单元测试.
 *
 * Class ProxyTest
 */
class ProxyTest extends TestCase
{
    /**
     * @group proxy
     */
    public function testSetAttribute()
    {
        $data = [];
        $proxy = new RecordProxy($data);
        $proxy->xyz = false;
        $this->assertTrue(false === $proxy->xyz);
    }
}
