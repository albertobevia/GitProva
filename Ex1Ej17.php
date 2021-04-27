<?php
do {
	$var1 = (int) readline("Leer Numero");
	$pos = (int) readline("Leer Posicion");
} while (!(($var1 > 0 ) and ($pos > 0 )));

$var1 = substr($var1 ,strlen($var1) - $pos,1);

print_r("xifra" . $var1 . "\n");


?>
