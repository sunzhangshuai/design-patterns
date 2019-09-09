<?php

namespace Tests\Unit;

use App\Structural\Registry\Registry;
use StdClass;
use Tests\TestCase;

/**
 * RegistryTest : 注册树模式.
 *
 * @category RegistryTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 */
class RegistryTest extends TestCase
{
    /**
     * @group registry
     *
     * @return void
     */
    public function testSetAndGetLogger()
    {
        Registry::set(Registry::LOGGER, new StdClass());

        $logger = Registry::get(Registry::LOGGER);
        $this->assertInstanceOf('StdClass', $logger);
    }
}
