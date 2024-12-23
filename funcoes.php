<?php

function mensagem() {
    echo"Olá mundo!";
}

mensagem() ;

echo"<br>";

function  saudacao($nome){
    echo"Olá $nome !";
}

saudacao("Luiz");
echo"<br>";
saudacao("Gisele");
echo"<br>";
saudacao("Pedro") ;

echo "<br>";
function somar(int $num1, int $num2){//interessando sempre especificar o tipo de variável para evitar erros int, float, string e bool
    return "A soma entre os numeros $num1 e $num2 é : $num1 + $num2";
}
echo somar(30, 50) ;

echo"<br>";

function fazerCafé($tipo ='cappuccino'){
    return "Fazendo café do tipo: $tipo .";
}
echo fazerCafé();
echo "<br>";    
echo fazerCafé('Expresso');
echo '<br>';
echo fazerCafé(null);

?>