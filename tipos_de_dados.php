<?php 

/*
Tipos de Dados

string = [palavras]
interger = [Número inteiro qualquer número não decimal]
Float = [Decimal numero decimal]                             
boolean = [Booleano - true e false]
array = [Matriz]
object = [objeto]
null = [Nulo]
*/

//string
$exemplo1 = "Luiz";

//interger

$exemplo2 = 324;

var_dump( $exemplo1 );
echo"<br><br>";
var_dump( $exemplo2 );

echo"<br><br>";
//float
$exemplo3 =  4.5;
var_dump( $exemplo3 );

echo"<br><br>";
//boolean
$luiz_bonitao = true;
var_dump( $luiz_bonitao );

echo"<br><br>";
//Array
$carros = array("Fusca","Brasilia","Chevtte",2024) ;
var_dump( $carros );

echo"<br><br>";
//object
class carro{
    public $cor;
    public  $modelo;
    public function __construct($modelo, $cor){
        $this->cor = $cor;
        $this->modelo = $modelo;
    }
    public function mensagem(){
        return "O carro é $this->cor e o modelo é $this->modelo";
    }
    
}
$carro = new carro("Brasília","Preto");
$carro2 = new carro("Fusca","Verde");
echo"<br><br>";

echo $carro->mensagem();
echo"<br><br>";

echo $carro2->mensagem();

echo"<br><br>";

echo $carro->cor;
echo"<br><br>";
echo $carro2->cor;

echo"<br><br>";

echo $carro->modelo;
echo"<br><br>";
echo $carro2->modelo;

echo"<br><br>";
//Null
$y = 'oi';
$y = null;// anulando a variável
var_dump( $y );



?>