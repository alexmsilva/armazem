<?php

use Illuminate\Database\Seeder;
use armazem\Categoria;

class DatabaseSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$this->call('CategoriaTableSeeder');
	}
}

class CategoriaTableSeeder extends Seeder {
	public function run() {
		Categoria::create(array('nome'=>'Brinquedos'));
		Categoria::create(array('nome'=>'Esportes'));
	}
}