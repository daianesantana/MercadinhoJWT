<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto; 
use Illuminate\Http\Request;

class ProdutoController extends Controller{
    //Método para exibir todos os produtos
    public function index(){
        //Obtém todos os produtos do banco de dados
        $produtos = Produto::all(); 

        //Retorna a view 'produto.index' com a lista de produtos
        return view('produto.index', ['produtos' => $produtos,]);
    } 

    //Método para exibir o formulário de criação de um novo produto
    public function create(){
        //Redireciona para a rota produto.create
        return view('produto.create'); 

    }

    //Método para armazenar um novo produto no banco de dados
    public function store(Request $request){

        //Obtém todos os dados do formulário
        $data = $request->all();
        //Cria uma nova instância do modelo Produto
        $produto = new Produto();

        //Chama o método setProduto para atribuir os dados ao objeto Produto
        $produto->setProduto($data);
         //Redireciona para a rota 'produto.index' após o armazenamento
        return redirect()->route('produto.index');
    }
    
    //Método para exibir os detalhes de um produto específico
    public function show($id){
        //Recupera o produto pelo ID
        $produto = Produto::find($id);

        //Verifica se o produto não foi encontrado
        if (!$produto) {
            //Redireciona para a rota 'produto.index' com uma mensagem de erro
            return redirect()->route('produtos.index')->with('error', 'Produto não encontrado.');
        }

        //Retorna a view com os detalhes do produto
        return view('produto.show', compact('produto'));
    }

}
