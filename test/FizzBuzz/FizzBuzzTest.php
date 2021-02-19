<?php

namespace Test\IngaPhp\FizzBuzz;

use IngaPhp\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testExpectFizzWhenProvidingTheNumberThree()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->play(3);

        $this->assertEquals('Fizz', $result);
    }

    public function testExpectBuzzWhenProvidingTheNumberFive()
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->play(5);

        $this->assertEquals('Buzz', $result);
    }

    public function testExpectTheSameProviderNumberWhenItsNotDivisibleByThreeNeitherFive()
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->play(1);

        $this->assertEquals('1', $result);
    }

    public function testExpectFizzBuzzWhenProvidingANumberDivisibleByThreeAndFive()
    {
        $fizzBuzz = new FizzBuzz();

        $result = $fizzBuzz->play(15);

        $this->assertEquals('FizzBuzz', $result);
    }
}
