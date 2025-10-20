<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    public function testAddPositiveNumbers()
    {
        $this->assertEquals(5, $this->calc->add(2, 3));
    }

    public function testAddWithNegativeNumber()
    {
        $this->assertEquals(-1, $this->calc->add(2, -3));
    }

    public function testDivideNormalCase()
    {
        $this->assertEquals(2, $this->calc->divide(4, 2));
    }

    public function testDivideByZeroThrowsException()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->calc->divide(4, 0);
    }
}