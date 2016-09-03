<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

use estoque\Produto;

class ProdutoController extends Controller{

	public function lista () {

        $produtos = Produto::all();

        return view("produto.listagem")->with('produtos', $produtos);
	}

	public function listaJson(){
    	$produtos = Produto::all();
    	return $produtos;
	}

	public function mostra() {

		$id = Request::route('id');

		$produto = Produto::find($id);

		if(empty($produto)){
			return "Produto inexistente.";
		}

		return view('produto.detalhes')->with('produto', $produto);
	}

	public function novo() {
		return view('produto.formulario');
	}

	public function adiciona() {

		$nome = Request::input('nome');
		$valor = Request::input('valor');
		$quantidade = Request::input('quantidade');
		$descricao = Request::input('descricao');

		DB::insert('insert into produto (nome, valor, descricao, quantidade) values (?, ?, ?, ?)', array($nome, $valor, $descricao, $quantidade));

		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
	}

}

?>