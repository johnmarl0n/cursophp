<?php

//Usando IF
$qualASuaIdade = 25;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
	echo "Criança";
} elseif ($qualASuaIdade < $idadeMaior) {
	echo "Adolescente";
} elseif ($qualASuaIdade < $idadeMelhor) {
	echo "Adulto";
} else {
	echo "Idoso";
}
echo '<br>';

//Testando operador Ternário
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

?>