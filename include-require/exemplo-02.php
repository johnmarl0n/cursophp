<?php

//Utilizando Include para chamar uma função simples
//include "exemplo-01.php";

//Utilizando Require para chamar uma função simples
require "exemplo-01.php";
//Pode ser substituído por require_once, para evitar o loop
//require_once "exemplo-01.php";

//Passando dados à função e mostrando em tela
$resultado = somar(10, 25);
echo $resultado;

?>