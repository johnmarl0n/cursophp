<?php
	//Escopo Global
	$nome = 'John';

	function teste() {
		//Escopo Local
		global $nome; //Chamada da variável Global
		echo $nome;
		echo '<br>';
	}

	function teste2(){

		//Nova variável, mesmo existindo como Global, não afeta local
		$nome = 'Marlon';
		echo $nome." agora no teste2";

	}

	teste();
	teste2();
?>