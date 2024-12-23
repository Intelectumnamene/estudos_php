<?php 
   /* Manipulação de Arquivos */

    //fopen() -> Abrir / Criar.
    //fwrite() -> Escrever no arquivo.
    //fclose() -> Ferchar o aqrquivo.
    //feof() -> Durante a leitura avisa
    //fgets()-> Pega uma linha do arquivo até no máximo 24bytes.
    //file_put_contents() -> Criar arquivo
    //file_get_contents() -> Pega todo
    //unlink()-> Delete um arquivo.
    //copy() -> Copiar arquivol.
    $arquivo = "teste.html";
    $titulo = "<h1>Luiz</h1>";
    file_put_contents($arquivo, '<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>'
        .$titulo.
    '</body>

    

    </html>
');




?>