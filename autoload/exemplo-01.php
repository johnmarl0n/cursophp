<?php
	//Utilizando AutoLoad
	function __autoload($nomeClasse){
		//var_dump($nomeClasse);
		require_once("$nomeClasse.php");
	}
	$carro = new delRey();
	$carro -> acelerar(80);

?>