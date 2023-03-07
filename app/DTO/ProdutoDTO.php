<?php

namespace App\DTO;

use Illuminate\Contracts\Validation\Validator;

 class ProdutoDTO extends AbstractDTO implements InterfaceDTO
{
    public readonly bool $ativo;

    public function __construct(
        public readonly string $titulo,
        public readonly int $estoque = 0,
        public readonly float $preco = 0,
        public readonly ?string $foto = null,
        bool $situacao = false
    ){
        $this->ativo = $situacao;
        $this->validate();
    }

    public function rules():array{
        return [
            'titulo' => 'required|string|min:10|max:60'
        ];
    }

    public function messages():array{
        return [
            'titulo' => 'Você precisa definir um título entre 10 e 60 caracteres.'
        ];
    }

    public function validator():Validator{

        return validator($this->toArray(), $this->rules(), $this->messages());

    }

    public function validate():array{
        return $this->validator()->validate();
    }
}
