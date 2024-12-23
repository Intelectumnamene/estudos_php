<?php

/*
cURL - permite que você se conecte e se comunique com diferentes tipos de servidores usando diferentes tipos de protocolos como protocolos https, ftp, gopher, telnet, dict, file e ldap. Libcurl também suporta certificados HTTPS, HTTP POST, HTTP PUT, upload via FTP e muito mais.

Modo feio de entender: É o Ajax do PHP. Faz basicamente a mesma coisa só que com mais poderes.
Pode fazer GET ou POST, mandar e receber dados diretamente a uma URL.
*/

// exemplo cURL GET
$ch = curl_init();

// apontar a url desejada
curl_setopt($ch, CURLOPT_URL, "https://viacep.com.br/ws/01001000/json/");

// ATIVAR RETORNO COMO STRING DO SERVIDOR
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// executar todo cURL
$retorno = curl_exec($ch);

// FECHAR O cURL
curl_close($ch);

echo "<pre>$retorno</pre>";

echo "<br>";

// Decodificar JSON
$dados = json_decode($retorno, true);

// Acessar o valor do estado (chave 'uf')
echo "Estado: " . $dados["uf"];
?>
