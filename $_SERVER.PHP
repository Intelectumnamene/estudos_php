<?PHP
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo'PHP_SELF = Mostra o caminho do arquivo!';
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo' SERVER_NAME = Mostra o nome dop servidor!';
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "HTTP_HOST = mostra o cabeçalho do servidor";
    echo "<br>";
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br>";
    echo "REMOTE_ADDR = Qual é o endereço de ip de uma determinada pessoa! ";
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo "HTTP_USER_AGENT = Várias informações da pessoa que está acessando a página!";

    foreach($_SERVER as $chave => $valor) { 

        echo "Os parâmetros: $chave e o que mostra: $valor <br>";
    }







?>