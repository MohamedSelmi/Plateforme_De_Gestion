<?php

namespace App\Rules;

use App\Models\Profile;
use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class OneToOneValidationRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $profile = User::find($value)?->profile();
        if ($profile) {
            $fail('This profile already exists');
        }
    }
}
