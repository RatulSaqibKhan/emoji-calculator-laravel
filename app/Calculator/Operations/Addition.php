<?php

namespace App\Calculator\Operations;

use App\Calculator\Interfaces\CalculatorInterface;

class Addition implements CalculatorInterface
{
    private $firstNumber, $secondNumber;

    /**
     * Create a new Addition instance.
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
     * Calculate addition of two numbers
     * @return float
     */
    public function calculate(): float
    {
        return (float)($this->firstNumber + $this->secondNumber);
    }
}