<?php

/* Superglobais = são algumas variáveis predefinidas no PHP que são sempre acessíveis, 
independentemente do escopo e você pode acessá-las a
 partir de qualquer função, classe ou 
 arquivo sem ter que fazer nada especial.​​ 
 
 $GLOBALS
 $_SERVER
 $_POST
 $_GET
 $_FILES
 $_ENV
 $_COOKIE
 $_SESSION
 */
$a = 5;
$b = 10;

function somar() {
    //$GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b']; pode se declarada desta forma ou da de baixo.
    global $a, $b,$c;
    $c = $a + $b;
}
somar();
echo $c;






?>