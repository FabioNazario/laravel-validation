<?php

namespace App\Validator;

interface ValidatorInterface{

    public function validate($attribute, $value, $parameters, $validator);
}