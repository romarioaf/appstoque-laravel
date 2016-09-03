<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

use estoque\Produto;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller{

	public function lista () {

        $produtos = Produto::all();

        return view("produto.listagem")->with('produtos', $produtos);
	}

	public function listaJson(){
    	$produtos = Produto::all();
    	return $produtos;
	}

	public function mostra($id) {
		$produto = Produto::find($id);

		if(empty($produto)){
			return "Produto inexistente.";
		}

		return view('produto.detalhes')->with('produto', $produto);
	}

	public function novo() {
		return view('produto.formulario');
	}

	public function remove($id) {
		$produto = Produto::find($id);
		$produto->delete();

		return redirect()->action('ProdutoController@lista');
	}

	public function adiciona(ProdutoRequest $request) {

		//Produto::create(Request::all());
		$params = $request->all();

		$produto = new Produto($params);
		$produto->save();

		return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome'));
	}

}

?>