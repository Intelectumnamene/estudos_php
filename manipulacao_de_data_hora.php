<?php 
/*Manipulação de data e hora */
$data = date_default_timezone_set('America/Sao_Paulo');
// caso o time zone não esteja configurado corretamente no Xampp

echo $data;
echo "<br>";
echo "<br>";
echo date("w"); //mostra a semana.
echo "<br>";
echo "<br>";
echo date("F"); //mostra o mês.
echo "<br>";
echo "<br>";
//pegar hora
echo date("H:i:s");
echo "<br>";
echo "<br>";
echo date("i");
//padrão brasileiro
//dia/ mes/ ano
//16/12/2024

//padrão americano
//ano/mes/dia
//2024/12/16
echo "<br>";
echo "<br>";
$hoje = date('Y-m-d');
$vencimento = '2024-12-17';
$diferenca = strtotime($vencimento) - strtotime($hoje);
$dias = floor($diferenca /(60*60*24));
//conversão para o padrão BR


$venc= explode('-', $vencimento);
$venc_formatado = $venc[2]."/".$venc[1]."/".$venc[0];

$data_hoje = explode('-', $hoje);
$hoje_formatado = $data_hoje[2]."/".$data_hoje[1]."/".$data_hoje[0];

echo"Vencimento:  $venc_formatado <br> ";
echo "Hoje: $hoje_formatado <br>" ;
echo"A diferença é de $dias dias entre as datas";

echo "<br>";
echo "<br>";

//comparar duas datas maior ou menor
$data1 = '2024-12-16';
$data2 = '2024-12-30';
if(strtotime($data1) > strtotime($data2)){
    
    echo "A data 1 é maior que a data 2";
}elseif(strtotime($data1 == $data2)){
    echo "A data 1 é igual a data 2";
}else{

    echo "A data 1 é menor que a data 2";
}
echo "<br>";
echo "<br>";



?>

<?php
date_default_timezone_set('America/Sao_Paulo');
echo "Timezone configurado: " . date_default_timezone_get() . "<br>";
echo "Hora atual: " . date('Y-m-d H:i:s');
?>