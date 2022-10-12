<?php
/*
	Tipos de Dados - 8 Tipos primitivos divididos em 3 grupos
	• Básicos 	-> Int, String, Float, Boolean
	• Compostos -> Arrays, Objects
	• Especiais	-> Resource, Null
*/

//------------------------------//
//Básicos
//String
$nome = 'HCode';
$site = 'www.hcode.com.br';

//Int
$ano = 1990;

//Float
$salario = 5500.99;

//Boolean
$bloqueado = false;

//------------------------------//
//Compostos
//Arrays
$frutas = array('abacaxi','laranja','morango','manga');
//echo $frutas[3];
//echo '<br>';

//Objects
$nascimento = new Datetime();
//var_dump($nascimento);

//------------------------------//
//Especiais
//Resource
$arquivo = fopen("exemplo-03.php","r");
//var_dump($arquivo);

//Null
$nulo = NULL;
$vazio = '';
var_dump($nulo);

?>