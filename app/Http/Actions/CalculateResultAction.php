<?php

namespace App\Http\Actions;

class CalculateResultAction
{
    protected $request;

    /**
     * Create a new CalculateResultAction instance.
     * @param $request
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Calculate the result for given user input
     * 
     * @return mixed
     */
    public function action()
    {
        $number1 = $this->request->input1;
        $number2 = $this->request->input2;
        $operand = $this->request->operand; // addition, subtraction, multiplication, division

        return $this->{$operand}($number1, $number2);
    }

    /**
     * Calculate addition of two numbers
     * @param $number1
     * @param $number2
     * @return float
     */
    private function addition($number1, $number2) : float
    {
        return (float)($number1 + $number2);
    }

    /**
     * Calculate subtraction of two numbers
     * @param $number1
     * @param $number2
     * @return float
     */
    private function subtraction($number1, $number2) : float
    {
        return (float)($number1 - $number2);
    }

     /**
     * Calculate multiplication of two numbers
     * @param $number1
     * @param $number2
     * @return float
     */
    private function multiplication($number1, $number2) : float
    {
        return (float)($number1 * $number2);
    }

    /**
     * Calculate division of two numbers
     * @param $number1
     * @param $number2
     * @return mixed
     */
    private function division($number1, $number2)
    {
        return $number2 != 0 ? round($number1 / $number2, 5) : 'Division by Zero';
    }
}
