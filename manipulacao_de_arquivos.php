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


    $pasta = "arquivos/";
    if(!is_dir($pasta)){
        mkdir($pasta,0775, true);
    }

    $nome_arquivo = date('y-m-d-H-i-s').".txt";
    $arquivo = fopen($pasta.$nome_arquivo,"a+");
    fwrite($arquivo,'Uma linha injetada pelo PHP'.PHP_EOL );
    fwrite($arquivo,'Uma linha injetada 2'.PHP_EOL );
    fwrite($arquivo,'Uma linha injetada  3'.PHP_EOL );
    fclose($arquivo);

    $caminhoArquivo = $pasta.$nome_arquivo;

    // if (file_exists($caminhoArquivo)&& is_file( $caminhoArquivo)){
    //     echo file_get_contents($caminhoArquivo);
        
        
        
        // no laço de repetição abaixo a lógica pega linha por linha como string.
        //Já o file_get_contents pega tudo como se fosse uma string.
        
        // $abrirArquivo = fopen( $caminhoArquivo,'r');
        // while(!feof($abrirArquivo)){
        //     echo fgets($abrirArquivo)."<br>";
        // }
        // fclose($abrirArquivo);




        //apagando arquivos
        if(is_dir($pasta)){
           //print_r( scandir($pasta));
           foreach( scandir($pasta) as $arquivo ){
            $caminho = $pasta.$arquivo;
            if(is_file($caminho)){
                unlink($caminho);
            }

           }
           rmdir($pasta);


        }

   // }

   
   
   
   ?>
   <?php
   //existe um função pronta no https://www.php.net/manual/pt_BR para apagar arquivos. Pesquise por rmdir.

    function delTree($dir) {

    $files = array_diff(scandir($dir), array('.','..'));

        foreach ($files as $file) {

        (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file");

        }

        return rmdir($dir);


  }
    delTree($nome_de_uma_pasta);


?>