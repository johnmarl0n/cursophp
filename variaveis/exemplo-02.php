<?php

//Camel Case
$anoNascimento = 1985;
$nomeCompleto = 'John Dias';

//Variável com número no nome
$nome1 = 'John';
echo $nome1;
echo '<br>';

//Limpando a variávelda memória
unset($nome1);

//Mostrando novamente a variavel somente se ela existir.0
if(isset($nome1)){
	echo $nome1;
}

//Concatenar variáveis
$nome1 = 'John';
$sobrenome = 'Dias';
$nomeCompleto = $nome1 ." ". $sobrenome;

echo $nomeCompleto;

?>