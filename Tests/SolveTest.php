<?php
use morozov\Solve;
use PHPUnit\Framework\TestCase;

require __DIR__ . './../vendor/autoload.php';

class SolveTest extends TestCase {
    /**
     * @dataProvider providerSolve
     * @param $a
     * @param $b
     * @param $c
     */

    public function testOne_solve($a, $b, $c){
        $test = new Solve();
        $this->assertEquals([$c], $test->solveOne($a, $b));
    }

    public function providerSolve(): array
    {
        return array (
            array (4, 7, -4),
            array (-6, 8, 1),
            array (1111, 123, -0.150)
        );
    }

    /**
     * @dataProvider providerSolveEx
     * @param $a
     * @param $b
     * @param $c
     */
    public function testSolveEx($a, $b, $c) {
        $this->expectException(\morozov\MorozovException::class);
        $test = new Solve();
        $this->assertEquals($c, $test->solveOne($a, $b));
    }
    public function providerSolveEx (): array
    {
        return array (
            array (1, 1, -1),
            array (0, 0, 0),
            array (null, null, 0),

        );
    }
}