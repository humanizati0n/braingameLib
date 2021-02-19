<?php
use morozov\MyLog;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class MyLogTest extends TestCase
{
    /**
     * @dataProvider providerSolve
     * @param $str
     */
    public function testLog($str)
    {
        $this->assertEquals('',  \morozov\MyLog::log($str));
    }
    public function providerSolve(): array
    {
        return array (
            array ("testkvest"),
            array ("kvesttest"),
            array (1211001101),
            array (false)
        );
    }
    public function testLogEx()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('',  \morozov\MyLog::log(null));
        $this->assertEquals('',  \morozov\MyLog::log());
    }
    public function testWrite()
    {
        $this->assertEquals('',   \morozov\MyLog::write(123));
        $this->assertEquals('',   \morozov\MyLog::write("test"));
        $this->assertEquals('',   \morozov\MyLog::write());
    }
}
