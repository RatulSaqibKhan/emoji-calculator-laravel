<?php

namespace App\Calculator\Facades;

use App\Calculator\Operations\Addition;
use App\Calculator\Operations\Division;
use App\Calculator\Operations\Multiplication;
use App\Calculator\Operations\Subtraction;

class CalculatorFacade
{
    private $addition, $subtraction, $multiplication, $division;

     /**
     * Create a new CalculatorFacade instance.
     * @param $firstNumber
     * @param $secondNumber
     * @return void
     */
    public function __construct($firstNumber, $secondNumber)
    {
        $this->addition = new Addition($firstNumber, $secondNumber);
        $this->subtraction = new Subtraction($firstNumber, $secondNumber);
        $this->multiplication = new Multiplication($firstNumber, $secondNumber);
        $this->division = new Division($firstNumber, $secondNumber);
    }

     /**
     * Calculate addition operation.
     * @return void
     */
    public function addition(): float
    {
        return $this->addition->calculate();
    }

     /**
     * Calculate subtraction operation.
     * @return float
     */
    public function subtraction(): float
    {
        return $this->subtraction->calculate();
    }

     /**
     * Calculate multiplication operation.
     * @return float
     */
    public function multiplication(): float
    {
        return $this->multiplication->calculate();
    }

    /**
     * Calculate division operation.
     * @return mixed
     */
    public function division()
    {
        return $this->division->calculate();
    }
}
