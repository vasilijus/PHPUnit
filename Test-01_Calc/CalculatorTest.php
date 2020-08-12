<?php 

require "Calculator.php";
use \PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function SetUp() : void
    {
        $this->calculator = new Calculator();
    }
    protected function TearDown() : void
    {
        $this->calculator = NULL;
    }
    protected function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}