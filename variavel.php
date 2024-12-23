<?php 
//variável.
//não iniciar variável com número.
$cor = 'branco';
$cor = 'amarelo';
echo $cor;



$y = 10;
$y = 15;

function teste(){
    //caso queira que $soma seja identificado fora. É preciso que ela também seja global.
    //apenas mostrando que para a função identificar o valor de x variável precisa estar dentro da função!
    global $y, $y;
    $soma = $y + $y;

    echo "O valor de x é : $y";
}

teste();

echo "O valor de x fora é: $soma";
?>