<?php

//Encontrar a posição da palavra
$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";
$q = strpos($frase, $palavra);

echo $frase;
echo '<br>';

//Retorno da posição
var_dump($q);
echo '<br>';

//Substring
$texto = substr($frase, 0, $q);
echo $texto;
echo '<br>';

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
echo $texto2;
echo '<br>';

var_dump($texto2);

?>