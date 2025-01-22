<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Phone implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

       !! preg_match('/^[0-9]{10,20}$/', $value); // return не рабатает в ларавел 10 и этот код не рабочий. См. документацию

    }
}
