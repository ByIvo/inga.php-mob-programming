<?php

namespace IngaPhp\FizzBuzz;

class FizzBuzz
{
    public function play(int $number): string
    {
        $fizz = $this->isDivisibleByThree($number) ? 'Fizz' : '';
        $buzz = $this->isDivisibleByFive($number) ? 'Buzz' : '';

        return $fizz || $buzz ? $fizz . $buzz : strval($number);
    }

    private function isDivisibleByThree(int $number): bool
    {
        return $number % 3 === 0;
    }

    private function isDivisibleByFive(int $number): bool
    {
        return $number % 5 === 0;
    }

    public static function playFizzBuzzUntil100()
    {
        $fizzBuzz = new self();

        foreach (range(1, 100) as $number) {
            echo $fizzBuzz->play($number) . PHP_EOL;
        }
    }
}
