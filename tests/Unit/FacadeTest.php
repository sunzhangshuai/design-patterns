<?php

namespace Tests\Unit;

use App\Structural\Facade\BiosInterFace;
use App\Structural\Facade\Facade;
use App\Structural\Facade\OsInterface;
use PHPUnit_Framework_MockObject_MockObject;
use Tests\TestCase;

/**
 * 门面模式单元测试
 *
 * Class FacadeTest
 *
 * @package Tests\Unit
 */
class FacadeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @group facade
     */
    public function testComputerOn()
    {
        /** @var OsInterface|PHPUnit_Framework_MockObject_MockObject $os */
        $os = $this->createMock(OsInterface::class);

        $os->method('getName')
            ->will($this->returnValue('Linux'));

        /** @var BiosInterFace|PHPUnit_Framework_MockObject_MockObject $bios */
        $bios = $this->getMockBuilder(BiosInterFace::class)
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();

        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        $facade = new Facade($bios, $os);

        // 门面接口很简单。
        $facade->turnOn();

        // 但你也可以访问底层组件。
        $this->assertEquals('Linux', $os->getName());
    }
}
