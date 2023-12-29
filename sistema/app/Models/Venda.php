<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Venda extends Produto
{
    protected $fillable = [
        'quantidade',
        'desconto',
        'produto_id'
    ];

    public function setVenda($data){

        //Obtém o produto relacionado à venda
        $produto = $this->produto;

        //Verifica se o produto existe
        if (!$produto) {
            return [
                'status' => 'erro',
                'mensagem' => 'Produto não encontrado',
            ];
        }

        //Verifica se há estoque suficiente
        if ($produto->quantidade < $data['quantidade']) {
            return [
                'status' => 'erro',
                'mensagem' => 'Estoque insuficiente',
            ];
        }

        //Atualiza os atributos da venda
        $this->quantidade = $data['quantidade'];
        $this->desconto = $data['desconto'];
        $this->valor_total = $this->quantidade * $this->preco * (1 - $this->desconto / 100);
        // Salva a venda
        $this->save();

         // Atualiza a quantidade do estoque do produto
        $produto->quantidade -= $this->quantidade;
        $produto->save();


        return [
            'status' => 'sucesso',
            'mensagem' => 'Venda realizada com sucesso',
            'venda' => $this->getVenda(),
            'estoque' => $produto->quantidade - $this->quantidade,
        ];
    }

    public function getVenda()
    {
        //Retorna uma string com os detalhes da venda
        return "Produto: {$this->produto->nome}, Preço: {$this->produto->preco}, Quantidade: {$this->quantidade}, Desconto: {$this->desconto}, Estoque: {$this->produto->quantidade}";
    }

    public function produto(){
    //Define o relacionamento de muitos para um com a classe Produto
    return $this->belongsTo(Produto::class);
}

}
