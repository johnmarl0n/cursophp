<?php

	//$ts = strtotime("2001-09-11"); //Timestamp 1000177200
	
	//Calculando data por string
	$ts = strtotime("+1 week, +2 day"); 

	echo date("l, d/m/Y", $ts);

?>