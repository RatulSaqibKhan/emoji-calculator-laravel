<?php

namespace App\Http\Controllers;

use App\Http\Actions\CalculateResultAction;
use App\Http\Requests\CalculatorRequest;
use Exception;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(CalculatorRequest $request)
    {
        try {
            $result = (new CalculateResultAction($request))->action();
            $status = 200;
            $error = null;
            $message = 'Success!';
        } catch (Exception $e) {
            $result = null;
            $status = 500;
            $error = $e->getMessage;
            $message = 'Something went wrong!';
        }

        return response()->json([
            'result' => $result,
            'error' => $error,
            'message' => $message
        ], $status);
    }
}
