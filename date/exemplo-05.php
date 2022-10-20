<?php
	//Usando a classe Datetime()
	$dt = new datetime();

	//Instanciando a classe passando um período fixo
	$periodo = new DateInterval("P15D");
	echo $dt -> format("d/m/Y H:i:s");
	echo '<br>';

	$dt -> add($periodo);	
	echo '<br>';

	echo $dt -> format("d/m/Y H:i:s");

?>