<?php
  
  // Sempre inicializar
  $ch = curl_init();
  
  // Apontar a URL desejada (corrigida)
  curl_setopt($ch, CURLOPT_URL, "http://localhost/PHP/teste3.php");
  
  // Opção para dizer que é POST (padrão é GET)
  curl_setopt($ch, CURLOPT_POST, 1);
  
  // Os campos que queremos mandar via POST
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('valor1' => 'Luiz', 'valor2' => 'Pedro')));
  
  // Ativar retorno como string do servidor
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  
  // Executar todo cURL
  $resultado = curl_exec($ch);
  
  // Fechar o cURL
  curl_close($ch);
  
  // Exibir o resultado
  echo "<pre>$resultado</pre>";
  
  ?>