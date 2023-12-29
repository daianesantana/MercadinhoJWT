<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //Define os atributos para serem preenchidos
    protected $fillable = [
        'nome',
        'preco',
        'quantidade',
    ];

    //Define os atributos do produto com base nos dados fornecidos.
    public function setProduto($data){
        $this->nome = $data['nome'];
        $this->preco = $data['preco'];
        $this->quantidade = $data['quantidade'];
        $this->save();
    }

    //Obtém os detalhes do produto.
    public function getProduto(){
        return [
            'nome' => $this->nome,
            'preco' => $this->preco,
            'quantidade' => $this->quantidade,
        ];
    }
}
