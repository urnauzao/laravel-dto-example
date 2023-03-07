<?php

namespace App\Http\Controllers;

use App\DTO\OutputProdutoDTO;
use App\DTO\ProdutoDTO;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create(Request $request){

        $dto = new ProdutoDTO(
            ...$request->only([
                "titulo",
                "estoque",
                "preco",
                "foto",
                "situacao"
            ])
        );
        
        $output  = $this->exemplo_uso_dto($dto);
        return response()->json($output->toArray());
    }

    private function exemplo_uso_dto(ProdutoDTO $dto){
        // ...
        return new OutputProdutoDTO($dto->titulo, $dto->preco);
    }
}
