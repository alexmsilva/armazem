<?php namespace armazem\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {
	
	public function lista() {
		$produtos = DB::select("SELECT * FROM produtos");
		return view("produto.listagem")->with('produtos', $produtos);
	}

	public function mostra() {
		$id = Request::route("id");
		$produto = DB::select("SELECT * FROM produtos WHERE id = ?", array($id));

		return view("produto.detalhes")->with("produto", $produto[0]);
	}

	public function novo() {
		return view("produto.formulario");
	}

	public function adiciona() {
		$nome = Request::input("nome");
		$descricao = Request::input("descricao");
		$valor = Request::input("valor");
		$quantidade = Request::input("quantidade");

		DB::insert("INSERT INTO produtos (nome,descricao,valor,quantidade) VALUES (?, ?, ?, ?)",
			array($nome, $descricao, $valor, $quantidade));

		return view("produto.adicionado")->with("nome", $nome);
	}
}