<?php


use PHPUnit\Framework\TestCase;

class SimpleMathTest extends TestCase
{
    protected int $_a = 5;
    protected int $_b = 12;

    protected \App\SimpleMath $simpleMath;

    protected function setUp(): void
    {
        $this->simpleMath = new App\SimpleMath();
    }

    /** @test */
    public function we_can_add_two_numbers()
    {
        $this->assertEquals('17', $this->simpleMath->add($this->_a, $this->_b));
    }

    /** @test */
    public function we_can_calculate_the_number_to_the_power_of_another_numbers()
    {
        $this->assertEquals('244140625', $this->simpleMath->power($this->_a, $this->_b));
    }

    /** @test */
    public function we_can_subtract_two_numbers()
    {
        $this->assertEquals('-7', $this->simpleMath->subtract($this->_a, $this->_b));
    }

    /** @test */
    public function we_can_multiply_two_numbers()
    {
        $this->assertEquals('60', $this->simpleMath->multiply($this->_a, $this->_b));
    }

    /** @test */
    public function we_can_divide_two_numbers()
    {
        $this->assertEquals('0.4166666666666667', $this->simpleMath->divide($this->_a, $this->_b));
    }
}
