

<?php 


if (isset($nome ) && isset( $idade )) {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
    echo "
            <style>
            .name{
                background-color: aqua;
                color: green;
            }
        </style>
            
    
    
    <div class='name'>
    
    <h1>O nome é: $nome e a idade é: $idade</h1>
    </div>
    ";

}



?>