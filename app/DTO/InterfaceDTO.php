<?php

namespace App\DTO;

use Illuminate\Contracts\Validation\Validator;

interface InterfaceDTO
{
    public function rules():array;
    public function messages():array;
    public function validator():Validator;
    public function validate():array;
}
