<?php
    $nome = limpaPost ($_POST['nome']);
    $idade = limpaPost ($_POST['idade']);
    // Verifica se os dados foram enviados pelo formulário
    if(isset($nome) && isset($idade)){ 
        // Atribui os valores enviados pelo formulário às variáveis
        // Exibe as informações na tela
        echo "<h2> Nome: $nome <br> Idade: $idade </h2>";
    } else {
        echo "<h2>Por favor, preencha todos os campos.</h2>";
    }


    function limpaPost($valor){
        $valor = trim($valor);
        $valor = stripcslashes($valor);
        $valor = htmlspecialchars($valor);
        return $valor;

    }
?>