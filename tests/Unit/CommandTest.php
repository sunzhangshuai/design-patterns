<?php

namespace Tests\Unit;

use App\Behavioral\Command\HelloCommand;
use App\Behavioral\Command\Invoker;
use App\Behavioral\Command\Receiver;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * CommandTest : 命令模式测试类.
 *
 * @category CommandTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class CommandTest extends TestCase
{
    /**
     * @var Invoker
     */
    protected $invoker;

    /**
     * @var Receiver
     */
    protected $receiver;

    protected function setUp(): void
    {
        $this->invoker = new Invoker();
        $this->receiver = new Receiver();
    }

    /**
     * @group command
     */
    public function testInvocation()
    {
        $this->invoker->setCommand(new HelloCommand($this->receiver));
        $this->expectOutputString('Hello World!');
        $this->invoker->run();
    }
}
