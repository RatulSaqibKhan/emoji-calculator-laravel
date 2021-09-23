<?php

namespace App\Http\Controllers;

use App\Http\Actions\CalculateResultAction;
use App\Http\Requests\CalculatorRequest;
use Exception;
use Illuminate\Http\JsonResponse;

class CalculatorController extends Controller
{
    /**
     * Return a view to load the initial calculator
     * 
     * @return mixed
     */
    public function index()
    {
        return view('calculator');
    }

    /**
     * Calculate the user input value
     * 
     * @param CalculatorRequest $request
     * @return JsonResponse
     */
    public function calculate(CalculatorRequest $request): JsonResponse
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
