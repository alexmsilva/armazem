<?php namespace armazem\Http\Controllers;

use Request;
use armazem\Produto;

class ProdutoController extends Controller {
	
	public function lista() {
		$produtos = Produto::all();
		return view("produto.listagem")->with('produtos', $produtos);
	}

	public function listaJson(){
		$produtos = Produto::all();
		return response()->json($produtos);
	}

	public function mostra($id) {
		$produto = Produto::find($id);
		return view("produto.detalhes")->with("produto", $produto);
	}

	public function novo() {
		return view("produto.formulario");
	}

	public function adiciona() {
		Produto::create(Request::all());
		return redirect()->action("ProdutoController@lista")->withInput(Request::only("nome"));
	}

	public function remove($id){
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()->action('ProdutoController@lista');
	}
}