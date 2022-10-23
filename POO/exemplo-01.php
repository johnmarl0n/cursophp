<?php

	//Orientação à Objetos
	//Classe
	class Pessoa {
		//Atributo
		public $nome;

		//Método (encapsulamento Public)
		public function falar(){
			return "O meu nome é ".$this->nome;
		}
	}

	$john = new Pessoa();
	$john->nome = "John Marlon";
	echo $john->falar();

?>