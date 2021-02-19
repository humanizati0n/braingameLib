<?php

use morozov\SolveTwo;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class SolveTwoTest extends TestCase {

    /**
     * @dataProvider providerSolve
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     */
    public function testSolve($a, $b, $c, $d) {
        $test = new SolveTwo();
        $this->assertEquals($d, $test->solve($a, $b, $c));
    }
    public function providerSolve(): array
    {
        return array (
            array (17, 13, 0,[0, -0.9]),
            array (1, 6, -25, [2.3851648071345037, -8.385164807134505]),
            array (0, 1, 1,[-1]),
            array (0, 1, 2, [-2.0]),

        );
    }

    /**
     * @dataProvider providerSolveTwoEx
     * @param $a
     * @param $b
     * @param $c
     * @param $d
     */
    public function testSolveTwoEX($a, $b, $c, $d) {
        $this->expectException(\morozov\MorozovException::class);
        $test = new SolveTwo();
        $this->assertEquals($d, $test->solve($a, $b, $c));
    }
    public function providerSolveTwoEx (): array
    {
        return array (
            array (0, 0, 0, 0),
            array (1, 2, 3, 0),
            array ('a', 'b', 'c', 0),
        );
    }
}
