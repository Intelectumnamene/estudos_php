<?php
 $carros = array("Fusca","Uno","Gol") ;
//ordem alfabética
 sort($carros);

 $carros[1]="Ferrari";
 $quantidade = count($carros);

 echo"A quantidade da matriz é:$quantidade";
 echo"<br>";
 echo"A quantidade da matriz é : ".count( $carros );
 echo"<br>";
 echo count( $carros ) ;
 echo"<br>";
 
 echo $carros[2];
 echo"<br>";
 echo $carros[1];
 echo"<br>";
 
 
 //FOR
$qtd = count( $carros);
for( $i = 0; $i < $qtd; $i++ ){
    echo "Vemos:".$carros[$i],"<br>";
}

foreach( $carros as $carro ){
    echo "Vemos".$carro,"<br>";
}
?>