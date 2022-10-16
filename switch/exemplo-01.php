<?php
setlocale(LC_ALL, 'pt BR');
//date_default_timezone_set('America/Sao_Paulo');

//Usando Switch Case
$diaDaSemana = date('w');
$horaAtual = date('H:i:s d/m/Y');
echo $horaAtual;
echo '<br>';

switch ($diaDaSemana){
	case 0:
		echo "Domingo";
		break;

	case 1:
		echo "Segunda-feira";
		break;
	
	case 2:
		echo "Terça-feira";
		break;
	
	case 3:
		echo "Quarta-feira";
		break;

	case 4:
		echo "Quinta-feira";
		break;

	case 5:
		echo "Sexta-feira";

	case 6:
		echo "Sábado";

	default:
		echo "Data inválida!";
		break;
}

?>