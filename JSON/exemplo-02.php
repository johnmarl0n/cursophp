<?php

//Lendo JSON diretamente
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';

//Alimentando variável Decompondo JSON
$data = json_decode($json, true);

//Mostrando variável
var_dump($data);

?>