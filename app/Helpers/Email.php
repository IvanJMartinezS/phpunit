<?php

namespace App\Helpers;

//email validation (class)
class Email{
    public static function validate($email){
        return (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}
