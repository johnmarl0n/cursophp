<?php

	//Função Anônima
	function test($callback){
		//Processo lento
		$callback();
	}

	//Chamando a função
	test(function(){

		echo "Terminou!";
		
	});
?>