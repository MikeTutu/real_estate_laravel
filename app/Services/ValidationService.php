<?php

namespace App\Services;
use Log;
use Validator;

class ValidationService 
{
    public function validatorForUpdatePassowrd($data)
    {
        return Validator::make($data, [
            'current_password' => ['required', 'string', 'min:6'],
            'password' => ['required', 'string', 'min:6', 'confirmed']
        ]);
    }

    public function validatorForUserProfile($data)
    {
        return Validator::make($data, [
           'name' => ['required','string','max:255'],
           'bio' => ['max:255'],
            'image' => ['image','max:5120'],
            'phone'=>['max:255']
        ]);
    }
}