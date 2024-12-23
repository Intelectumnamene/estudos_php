<?php

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

echo "O valor enviado foi $valor1 e $valor2";


?>


<!-- pode ser feito desta forma para saber se a chave existe ou não e evitar o warning(aviso de erro.)

$valor1 = $_POST['valor1'] ?? null; // Define como null se a chave não existir
 $valor2 = $_POST['valor2'] ?? null;

if ($valor1 && $valor2) {
echo "O valor enviado foi $valor1 e $valor2";
} else {
     echo "Nenhum valor foi enviado via POST.";
} -->

