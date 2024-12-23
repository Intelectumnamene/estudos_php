<?php 
    /*constantes A contante armazena um valor que nunca muda!*/
    define("exemplo","Oi");
    echo exemplo;
    echo "<br>";
    
    define("exemplo1","Tudo bom!");
    
    echo "<br>";
    function teste(){
        echo exemplo;
    }
    
    teste();
    echo "<br>";


    define("carros",["fusca","gol","uno"]);

    echo carros[1];


?>