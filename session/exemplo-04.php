<?php

session_id('2frnu36oivf485l9993qt4tmtb');
require_once("config.php");

session_regenerate_id();
echo session_id();

echo '<br>';
var_dump($_SESSION);
?>