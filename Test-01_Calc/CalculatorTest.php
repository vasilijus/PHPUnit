<?php 

require "Calculator.php";
use \PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;

    public function SetUp() : void
    {
        $this->calculator = new Calculator();
    }
    public function TearDown() : void
    {
        $this->calculator = NULL;
    }

    public function testAdd()
    {
        $expect = 3;
        $result = $this->calculator->add(1, 2);
        $this->assertEquals($expect, $result);
    }
    public function testSub()
    {
        $expect = 22;
        $result = $this->calculator->sub(4, 2);
        $this->assertEquals($expect, $result);
    }
}