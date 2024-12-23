<?php 

/*
JSON é basicamente um formato leve de troca de informações de dados entre sistemas.

Basicamente consite em transformar dados como um objeto ou uma matris em testo e o contrário também, transformar um texto em objeto ou uma matriz.

É a forma mais utilizada atualmente para trocar dados entre sistemas.

Embora tenha Javascript no nome, por que originalmente foi feito pensando em aplicações Javascript, o JSON é um padrão de transmissão de dados aceito em praticamante todas a linguafens atuais, não só Javasscript. Isso inclui PHP.

Resumindo, podemos dizer que JSON é uma espécie de padrão, um conversos para transmitir dados.

Como funciona?

Toda informação enviada ou recebida entre aplicações SEMPRE precisa ser um texto. 
Por isso, todo objeto ou matriz que vai ser enviado primeiro tem que ser transformado em texto.

Quem faz o trabalho?
O  JASON.

json_encode()
converte array/obj em texto, uma string JSON;

json_decode()
Converte um texto JSON em um objeto ou matriz.


Uma vez qu e este texto chegou no seu sistema você vai precisar "transformar" este texto em um objeto ou uma matriz.


*/

$texto ='
    {
      "cep": "01001-000",
      "logradouro": "Praça da Sé",
      "complemento": "lado ímpar",
      "unidade": "",
      "bairro": "Sé",
      "localidade": "São Paulo",
      "uf": "SP",
      "estado": "São Paulo",
      "regiao": "Sudeste",
      "ibge": "3550308",
      "gia": "1004",
      "ddd": "11",
      "siafi": "7107"
    }
            ';

$dados = json_decode($texto, true);//colocando o true a $texto deixa de ser um objeto e se transform a em um array.

//trabalhando com matriz sem true
// echo $dados-> bairro;
// echo"<br>";
// echo $dados-> cep;

$dados['professor'] = "Luiz";

//trabalahando com array com true
echo  $dados["bairro"];
echo  $dados["cep"];

var_dump($dados);



$json = json_encode /*tranforma em texto para enviar a alguém.*/($dados, JSON_PRETTY_PRINT/*ORGANIZA O JSON*/ |JSON_UNESCAPED_UNICODE /*CORRIGE O PROBLE DE ACENTUAÇÃO*/); 
echo "<pre>$json</pre>"
?>