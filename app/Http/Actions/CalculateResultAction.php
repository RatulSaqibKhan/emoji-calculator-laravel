<?php

namespace App\Http\Actions;

use App\Calculator\Facades\CalculatorFacade;

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
        $operand = $this->request->operand; // addition, subtraction, multiplication, division
        $calculator = new CalculatorFacade($this->request->input1, $this->request->input2);
        return $calculator->{$operand}();
    }

}
