<?php
	//Variáveis Super Globais
	$nome = (int)$_GET["a"]; //Pegando a variável via método GET.
														//e convertendo para int.
//Uso
//localhost/cursophp/variaveis/exemplo-04.php?a=123
	var_dump($nome);
	echo '<br>';

	//Pegando IP local
	$ip = $_SERVER['REMOTE_ADDR'];
	echo $ip;
	echo '<br>';

	//Pegando nome arquivo
	$arquivo = $_SERVER['SCRIPT_NAME'];
	echo $arquivo;
	echo '<br>';

	//Atribuindo Sessão
	session_start();
	$_SESSION['teste']= $nome;
	echo $_SESSION['teste'];
?>