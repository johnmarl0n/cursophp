<?php

	//Cadastro de Clientes extende a classe Cadastro
	namespace Cliente;

	class Cadastro extends \Cadastro {
		public function registrarVenda(){
			echo "Foi registrada uma venda para o cliente ".$this ->getNome();
		}
	}


?>