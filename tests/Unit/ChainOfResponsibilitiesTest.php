<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Behavioral\ChainOfResponsibilities\Request;
use App\Behavioral\ChainOfResponsibilities\Responsible\FastStorage;
use App\Behavioral\ChainOfResponsibilities\Responsible\SlowStorage;

/**
 * ChainOfResponsibilitiesTest : 责任链模式单元测试.
 *
 * @category ChainOfResponsibilitiesTest
 * @author   zhangshuai <zhangshaui1134@gmail.com>
 * @license  http://design-patterns.test/ 设计模式
 * @link     http://design-patterns.test/
 */
class ChainOfResponsibilitiesTest extends TestCase
{
    /**
     * @var FastStorage
     */
    protected $chain;

    protected function setUp(): void
    {
        $this->chain = new FastStorage(['bar' => 'baz']);
        $this->chain->append(new SlowStorage(['bar' => 'baz', 'foo' => 'bar']));
    }

    public function makeRequest()
    {
        $request = new Request();
        $request->verb = 'get';

        return [
            [$request],
        ];
    }

    /**
     * @group chainOfResponsibilities
     *
     * @dataProvider makeRequest
     *
     * @param Request $request
     */
    public function testFastStorage($request)
    {
        $request->key = 'bar';
        $ret = $this->chain->handle($request);

        $this->assertTrue($ret);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('baz', $request->response);
        // despite both handle owns the 'bar' key, the FastStorage is responding first
        $className = FastStorage::class;
        $this->assertEquals($className, $request->forDebugOnly);
    }

    /**
     * @group chainOfResponsibilities
     *
     * @dataProvider makeRequest
     *
     * @param Request $request
     */
    public function testSlowStorage($request)
    {
        $request->key = 'foo';
        $ret = $this->chain->handle($request);

        $this->assertTrue($ret);
        $this->assertObjectHasAttribute('response', $request);
        $this->assertEquals('bar', $request->response);
        // FastStorage has no 'foo' key, the SlowStorage is responding
        $className = SlowStorage::class;
        $this->assertEquals($className, $request->forDebugOnly);
    }

    /**
     * @group chainOfResponsibilities
     *
     * @dataProvider makeRequest
     *
     * @param Request $request
     */
    public function testFailure($request)
    {
        $request->key = 'kurukuku';
        $ret = $this->chain->handle($request);

        $this->assertFalse($ret);
        // the last responsible :
        $className = SlowStorage::class;
        $this->assertEquals($className, $request->forDebugOnly);
    }
}
