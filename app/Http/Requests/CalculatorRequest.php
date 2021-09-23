<?php

namespace App\Http\Requests;

use App\Rules\OperandRule;
use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'input1' => 'required|numeric',
            'operand' => ['required', 'string', new OperandRule],
            'input2' => 'required|numeric',
        ];
    }
}
