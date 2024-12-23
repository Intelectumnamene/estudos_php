<?php

//criar um cookie de nome

//Cookies são pequenos arquivos incorporados pelo servidor no computador do usuário.
//Servem para trocar ddados entre o navegador do usuáio e o servidor da página que o criou.
//Cookies tem prazo de validade.
//O cokkie ficará disponível pelo tempo que o desenvolvedor do site definir.
//Portanto, se o cookie estiver válido, ou seja, disponível, ele poderá ser acessado em seu código mesmo que o cliente feche o navegador ou desligue o computador.

setcookie('nome','Pedro', time()+(86400 * 30))// validade de tempo 30 dias.

// setcookie('nome','', time()- 3600); elimina o cookie.



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <h1>Cookies</h1>

    <?php

    if(count($_COOKIE)> 0 ){
        echo" Tem cookies";
    }else{
        echo "Não tem cookies!";
    }
    
    echo"<br>";
    echo"<br>";

    if(isset($_COOKIE['nome'])){

        $nome = $_COOKIE['nome'];
        echo"O nome é $nome";

    }else{
        echo "Não tem nenhum cookie";
    }

    ?>


</body>
</html>