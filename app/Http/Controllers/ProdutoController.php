<?php namespace armazem\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {
	
	public function lista() {
		$produtos = DB::select("SELECT * FROM produtos");
		return view('listagem')->with('produtos', $produtos);
	}

	public function mostra() {
		$id = Request::route("id");
		$produto = DB::select("SELECT * FROM produtos WHERE id = ?", [$id]);

		return view("detalhes")->with("produto", $produto[0]);
	}
}