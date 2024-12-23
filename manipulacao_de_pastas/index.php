<?php
// link('https://www.php.net/manual/pt_BR/function.chmod.php'); 

$pasta = "nova_pasta";
$dupla = "teste/nova_pasta/";

//criando apenas uma pasta.
if(!is_dir($pasta)){
    mkdir($pasta,0755); 
    
    
    //0755  Tudo para o proprietário, leitura e execução para os outros. 
    
}else{
    rename($pasta, 'teste1');
    //rmdir($pasta); 

    //rename também pode mover uma pasta para um outro lugar. Use o true depois da permissão.
    
    // rmdir deleta a pasta se ela estiver vazia, se esta pasta contiver algo não vai deletar, será necessário deletar o que tem dentro para depois executar o comando. Se tiver algo dentro dará um retorno de warning.
}

//criando mais de uma pastas
if(!is_dir($dupla)){
    mkdir($dupla,0755,true); // usar o true para ter permição de criar mais de uma pasta.
    
    
    //0755  Tudo para o proprietário, leitura e execução para os outros. 
    
}

//comando para criar pasta

//importante usar esta verificação com a condição if para não gerar erro com pastas com nomes já existentes! 

//quando se faz este tipo de criação de pasta, a permição da mesma fica em aberto para o criador e para qualquer pessoa. Sendo assim é necessário ter um certo nível de segurança chamdo "chmod"


// // Escrita e leitura para o proprietário, nada mais para ninguém
// chmod ("/somedir/somefile", 0600);

// // Escrita e leitura para o proprietário, leitura para todos os outros
// chmod ("/somedir/somefile", 0644);

// // Tudo para o proprietário, leitura e execução para os outros
// chmod ("/somedir/somefile", 0755);

// // Tudo para o proprietário, leitura e execução para o grupo do prop
// chmod ("/somedir/somefile", 0750);

//criando apenas uma parta




?>