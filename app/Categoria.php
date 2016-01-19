<?php namespace armazem;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model {
	public function produtos() {
		return $this->hasMany('armazem\Produto');
	}
}