<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venda;
use App\Models\Produto;

class VendaController extends Controller{
    
    //Método para exibir todas as vendas
    public function index(){
        //Obtém todas as vendas do banco de dados
        $vendas = Venda::all();
        //Retorna a view 'venda.index' com a lista de vendas
        return view('venda.index', ['vendas' => $vendas,]);
    }

    //Método para exibir o formulário de criação de uma nova venda
    public function create($produto_id)
    {
        //Recupera o produto pelo ID
        $produto = Produto::find($produto_id);

        //Verifica se o produto existe
        if (!$produto) {
            return redirect()->back()->with(['message' => 'Produto não encontrado.'])->withErrors(['Produto' => 'Produto não encontrado.']);
        }
        //Retorna a view 'venda.create' com o produto para ser vendido
        return view('venda.create', compact('produto'));
    }
    //Método para armazenar uma nova venda no banco de dados
    public function store(Request $request, $produto_id){
        //Obtém todos os dados do formulário
        $data = $request->all();
    
        //Instancia um novo objeto Venda
        $venda = new Venda();
    
        // Obtém o produto pelo ID
        $produto = Produto::find($produto_id);
    
        //Verifica se o produto existe
        if (!$produto) {
            return redirect()->back()->with(['message' => "Produto não encontrado."])->withErrors(['Produto' => 'Produto não encontrado.']);
        }
    
        //Relaciona o produto à venda
        $venda->produto()->associate($produto);
    
        //Registra a venda e verifica o estoque
        if ($venda->setVenda($data)) {
            return redirect()->route('venda.index')->with(['message' => 'Venda registrada com sucesso!']);
        } else {
            return redirect()->back()->with(['message' => 'Estoque insuficiente para a venda.']);
        }
    } 

    //Método para exibir os detalhes de uma venda específica
    public function show($vendaId)
    {
        //Recupera a venda do banco de dados
        $venda = Venda::findOrFail($vendaId);

        //Retorna a view 'venda.show' passando os detalhes da venda
        return view('venda.show', compact('venda'));
    }

    
}