<?php

use App\MasterMind;
use PHPUnit\Framework\TestCase;

class MasterMindTest extends TestCase
{
    public function testSequence1()
    {
        $masterColors = ['blue', 'green', 'white', 'black'];
        $playerColors = ['purple', 'orange', 'pink', 'yellow'];

        $masterMind = new MasterMind($masterColors, $playerColors);
        $this->assertEquals([0, 0], $masterMind->getScore($masterColors, $playerColors));
    }

    public function testSequence2()
    {
        $masterColors = ['blue', 'green', 'green', 'black'];
        $playerColors = ['red', 'blue', 'green', 'pink'];

        $masterMind = new MasterMind($masterColors, $playerColors);
        $this->assertEquals([1, 1], $masterMind->getScore($masterColors, $playerColors));
    }

    public function testSequence3()
    {
        $masterColors = ['blue', 'green', 'white', 'black'];
        $playerColors = ['red', 'blue', 'green', 'pink'];

        $masterMind = new MasterMind($masterColors, $playerColors);
        $this->assertEquals([2, 0], $masterMind->getScore($masterColors, $playerColors));
    }

    public function testSequence4()
    {
        $masterColors = ['blue', 'green', 'white', 'black'];
        $playerColors = ['blue', 'orange', 'pink', 'yellow'];

        $masterMind = new MasterMind($masterColors, $playerColors);
        $this->assertEquals([0, 1], $masterMind->getScore($masterColors, $playerColors));
    }

    public function testSequence5()
    {
        $masterColors = ['blue', 'green', 'white', 'black'];
        $playerColors = ['red', 'blue', 'green', 'black'];

        $masterMind = new MasterMind($masterColors, $playerColors);
        $this->assertEquals([2, 1], $masterMind->getScore($masterColors, $playerColors));
    }

    public function testSequence6()
    {
        $masterColors = ['blue', 'green', 'white', 'black'];
        $playerColors = ['blue', 'green', 'white', 'black'];

        $masterMind = new MasterMind($masterColors, $playerColors);
        $this->assertEquals('win', $masterMind->getScore($masterColors, $playerColors));
    }
}
