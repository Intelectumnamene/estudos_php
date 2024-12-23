<?php
//strlen
echo strlen("Oi pessoal! ");
echo("<br>");
echo(" O strlen conta quantas palavras incluindo espaços!");
echo("<br>");

$palavra = "Beleza pessoal";
echo strlen( $palavra);

echo("<br>");

//str_word_count()
echo str_word_count($palavra);
echo("<br>");
echo("str_word_count() conta quantos elementos há e não a quantidade de letras!");

echo("<br>");
//strrev();
echo strrev('Luiz');
echo("<br>");
echo('O strrev coloca a palavra de tras para vrente!');

echo("<br>");
//strpos
echo strpos("OI tudo bom","tudo");
echo("<br>");
echo("strpos() serve para ver se a palavra existe dentro da frase e em qual posição a mesma se encontra. Caso não haja a palavra a função não retorna nada!");
echo("<br>");

//str_replace
$nome = "Olá mundo!";
echo str_replace("mundo","Luiz", $nome);
echo("<br>");
echo("str_replace = função que permite selecionar a palavra que está no texto e mudar pela palavra desejada!");
echo("<br>");

$data = "10-12-2024";
$data_formatada = str_replace("-","/", $data);
echo("Data antiga: $data <br> Data formatada: $data_formatada");

?>