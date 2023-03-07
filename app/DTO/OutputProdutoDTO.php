<?php

namespace App\DTO;

use Illuminate\Contracts\Validation\Validator;

class OutputProdutoDTO extends AbstractDTO implements InterfaceDTO
{

    public function __construct(public string $title, public float $price = 0)
    {
        $this->validate();
    }

    public function rules(): array {
        return [];
     }

    public function messages(): array {
        return [];
     }

    public function validator(): Validator {
        return validator($this->toArray(), $this->rules(), $this->messages());
    }

    public function validate(): array { 
        return $this->validator()->validate();
    }
    
}
