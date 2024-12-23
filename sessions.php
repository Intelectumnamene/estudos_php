<?php 
// Uma sessão é basicamente uma forma de armazenar variáveis e compartilhar elas entre todas as páginas do site
//Enquanto o navegador estiver aberto ou té o usuário ficar inativo.

//Parecido com o conceito de cookies, mas ela não cria um arquivo. A sessão fica a tiva apenas durante o uso.

//Fechou o navegador ou destruiu a sessão ela se encerra.

//Sintaxe

// iniciar sessão
// session_start()


//criar / modificar variável de sessão
// $_SESSION['nome'] ="Luiz";
// $_SESSION['profissao'] ="Professor";

//remover todas as variáveis de sessão
//session_unset(); ou $_SESSION =array(); 

//destruir a sessão
//session_destroy();

session_start();
$_SESSION['nome']='Luiz';
$_SESSION['profissao']= 'Professor';

// session_unset();// se descomentar o código as informações criadas no arquivo pagina2.php serão excluídas e gerará um erro Warning.

// session_destroy(); // descomentando este códio irá destruir a sessão.

// se fechar o navegador e reabrí-lo não haverá mais informações na pagina2.php mesmo com a lógica feita no arquivo. É uma caracterítica da SESSION. 


?>