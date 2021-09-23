<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OperandRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        /**
         * If the value from client end resides in the accepted values,
         * the validation is passed otherwise not
         */
        $accepted_values = ['addition', 'subtraction', 'multiplication', 'division'];

        return in_array(strtolower($value), $accepted_values) ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The given input is not valid!';
    }
}
