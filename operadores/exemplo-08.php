<?php

//Ordem matemática da operação
$resultado = 10 + 3 / 2;
echo $resultado;
echo '<br>';

$resultado = (10 + 3) / 2;
echo $resultado;
echo '<br>';

//E (&&)
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
var_dump($resultado);
echo '<br>';

//OU (||)
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
var_dump($resultado);
echo '<br>';

?>