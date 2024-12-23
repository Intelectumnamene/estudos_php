<?php
//manipulação de numeros

$valor = "150" + 20;
$valor1 = 4 * 2.5;
$valor3 = 100;
$valor4 = 5.75;
$valor5 = "teste";


$valor_convertido = (int) $valor1;
$valor_convertido2 = (float) $valor1;
var_dump( $valor );
echo"<br>";
var_dump( $valor_convertido);
echo"<br>";
var_dump( $valor_convertido2);

echo"<br>";
var_dump(is_int($valor3));
echo"<br>";
var_dump(is_float($valor4));
echo "<br>";
var_dump(is_string($valor5));


?>