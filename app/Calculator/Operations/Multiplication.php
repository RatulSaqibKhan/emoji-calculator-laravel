<?php

namespace App\Calculator\Operations;

use App\Calculator\Interfaces\CalculatorInterface;

class Multiplication implements CalculatorInterface
{
    private $firstNumber, $secondNumber;

    /**
     * Create a new Multiplication instance.
     * @param $firstNumber
     * @param $secondNumber
     * @return void
     */
    public function __construct($firstNumber, $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    /**
     * Calculate multiplication of two numbers
     * @return float
     */
    public function calculate(): float
    {
        return (float)($this->firstNumber * $this->secondNumber);
    }
}