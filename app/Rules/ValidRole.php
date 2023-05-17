<?php
    namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidRole implements Rule
{
public function passes($attribute, $value)
{
return in_array($value, ['jugador', 'entrenador']);
}

public function message()
{
return 'The selected role is invalid.';
}
}
