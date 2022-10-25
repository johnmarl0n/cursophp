<?php
//Encapsulamento

class Pessoa {
	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){
		echo $this->nome ."<br/>";
		echo $this->idade ."<br/>";
		echo $this->senha ."<br/>";
	}
}

$objeto = new Pessoa();

//echo $objeto->nome . "<br/>"; 	//Método Publico acessando de fora.
//echo $objeto->idade . "<br/>"; //Método Protected acessando de fora (erro).
//echo $objeto->senha . "<br/>"; 		//Método Private acessando de fora (erro).

$objeto->verDados(); //Usando o método Publico

?>