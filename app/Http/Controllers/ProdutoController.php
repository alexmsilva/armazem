<?php namespace armazem\Http\Controllers;

use Request;
use armazem\Produto;
use armazem\Http\Requests\ProdutosRequest;

class ProdutoController extends Controller {

	public function __construct() {
		$this->middleware("auth", array('only'=>array('novo','adiciona','remove')));
	} 
	
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

	public function adiciona(ProdutosRequest $request) {
		// o validator já faz a validação e se não der certo, redireciona para o formulário com a variável errors setada
		Produto::create($request->all());
		return redirect()->action("ProdutoController@lista")->withInput(Request::only("nome"));
	}

	public function remove($id) {
		$produto = Produto::find($id);
		$produto->delete();
		return redirect()->action('ProdutoController@lista');
	}
}