<?php
header('Content-type: text/html; charset=utf-8');

$pessoas = array();
array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Glaucio',
	'idade' => 25
));

print_r($pessoas[0]['nome']);

echo json_encode($pessoas);

?>