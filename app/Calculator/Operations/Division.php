<?php

namespace App\Calculator\Operations;

use App\Calculator\Interfaces\CalculatorInterface;

class Division implements CalculatorInterface
{
    private $firstNumber, $secondNumber;

    /**
     * Create a new Division instance.
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
     * Calculate division of two numbers
     * @return mixed
     */
    public function calculate()
    {
        return $this->secondNumber != 0 ? round($this->firstNumber  / $this->secondNumber, 5) : 'Division by Zero';
    }
}
