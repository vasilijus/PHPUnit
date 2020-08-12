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
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }
}