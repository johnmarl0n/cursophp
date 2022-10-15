<?php

//Função Strings
$nome = "joão rangel";
echo $nome;
echo '<br>';

//Tudo para Maiúsculo
echo strtoupper($nome);
echo '<br>';

$nome2 = strtoupper($nome);

//Tudo para Minúsculo
echo strtolower($nome);
echo '<br>';

//Primeira letra de cada palavra
echo ucwords($nome);
echo '<br>';

//Primeira letra apenas
echo ucfirst($nome);
echo '<br>';

?>