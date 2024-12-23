<?php
 $idade = array("Luiz"=>"42","Pedro"=>10, "Gisele"=>40);
 ksort($idade);//pega pelas chaves

 echo "<br>";
 echo $idade['Gisele'];
 echo "<br>";
 echo $idade["Pedro"] = "Maria";
 echo "<br>";
 
foreach ($idade as $key => $value) {
     echo"O nome é : $key a idade é $value.<br>" ;
    }
    
echo "<br>";
$carros = array("Prisma","Fusca","Uno","Gol", "Brasília") ;
echo "<br>";
sort($carros);
echo "<br>";
foreach ($carros as $carro){
    echo "$carro <br>";
}


echo "<br>";
$num = array(3, 7,9, 4,300, 200, 50 ) ;
sort($num);
foreach ($num as $numeros) {
    echo "$numeros <br>";
}

asort($numeros);// da forma contrária e no caso de números do menor para o maior.

?>