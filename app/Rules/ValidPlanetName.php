<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidPlanetName implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $forbidden = ['Earth 2.0', 'Nibiru', 'Planet X'];
        if (in_array(strtolower($value), array_map('strtolower', $forbidden))) {
            $fail('This name of the planet is prohibited for use!');
        }
    }
}
