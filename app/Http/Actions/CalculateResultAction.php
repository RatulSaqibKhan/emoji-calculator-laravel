<?php

namespace App\Http\Actions;

class CalculateResultAction
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function action()
    {
        $input1 = $this->request->input1;
        $input2 = $this->request->input2;
        $operand = $this->request->operand;

        return $this->{$operand}($input1, $input2);
    }

    private function addition($input1, $input2)
    {
        return $input1 + $input2;
    }

    private function subtraction($input1, $input2)
    {
        return $input1 - $input2;
    }

    private function multiplication($input1, $input2)
    {
        return $input1 * $input2;
    }

    private function division($input1, $input2)
    {
        return round($input1 / $input2, 5);
    }
}
