<?php
//Quando se faz uma validação me PHp é o servidor que faz esta validação e não há como burlar!
if($_SERVER['REQUEST_METHOD']== "POST"){
    $nome = limpaPost($_POST['nome']) ;
    $email= limpaPost( $_POST['email']);
    $senha= limpaPost($_POST['senha']);
    $repete_senha= limpaPost($_POST['repete_senha']);
}
//caso a variável estiver vazia gera um erro!
    if(empty($nome)){
        $erroNome = "Por favor informe um nome!";

    }else{
//variável preenchida incorretamente com nomes invalidados
        if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)){

            $erroNome = "Apenas letras e espaços em branco são aceitos";

        }else{
        $erroNome = "Nenhum";
        }
    }
//verificar se email é vazio
    if(empty($email)){
        $erroEmail = "Favor informe um email!";

    }else{
        //verificar se o email é válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroEmail = "Formato de Email invalido!";    
    }else{
        $erroEmail = "Nenhum";
    }
}


//verificar se senha está vazia.
    if(empty($senha)){
        $erroSenha = "Favor informe uma senha!";
    }else{
//verificar se senha tem ao menos 6 dígitos.
        if(strlen($senha)< 6){
            $erroSenha="Mínimo 6 dígitos!";
        }else{
            $erroSenha = "Nenhum";
        }
    }


//verificar se repte senha está vazia
    if(empty($repete_senha)){
        $erroRepeteSenha = "Você precisa repetira senha.";
    }else{

//verifica se as senha são idênticas
        if($repete_senha !== $senha){
            $erroRepeteSenha ="Senhas não conhecidem.";
        }else{
            $erroRepeteSenha="Nenhum";
        }

    }

//verificar se não houve nenhum erro.
    if($erroNome == "Nenhum" && $erroEmail == "Nenhum" && $erroSenha == "Nenhum" && $erroRepeteSenha == "Nenhum"){
        //redirecionar para uma página de obrigado!
        header('Location: obrigado.html');
        exit();// Adicione exit() após o header para garantir que o script seja interrompido
        

}



function limpaPost($valor){
    $valor = trim($valor);
    $valor = stripcslashes($valor);
    $valor = htmlspecialchars($valor);

    return $valor;

}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.materialdesignicons.com/7.0.96/css/materialdesignicons.min.css" rel="stylesheet">

        <title>Validação de Formulário</title>
    </head>

    <body>

        <div class="container">
            <h1 class="mt-5">Validação de Formuláriot</h1>

            <form action="" method="post">
                <div class="mb-3 mt-5">

                    <label for="exampleFormControlInput1" class="form-label">Nome completo <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" title="Campo obrigatório"></i></i></label>
                    <input type="text" class="form-control <?php if(isset($erroNome)){if ( $erroNome !== "Nenhum"){echo"is-invalid";}}?>" id="nome" name="nome" placeholder="Seu nome completo..." value="<?php if(isset($_POST['nome'])){echo $_POST['nome'];} ?>" required>
                    <div class="invalid-feedback">
                    <?php if(isset($erroNome)){if( $erroNome !== "Nenhum"){echo $erroNome;}}?>
                    </div>

                </div>


                <div class="mb-3">
                    <label for="email" class="form-label">Email<i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" title="Campo obrigatório"></i></i></label>
                    <input type="email" class="form-control <?php if(isset($erroEmail)){if ( $erroEmail !== "Nenhum"){echo"is-invalid";}}?>" id="email" name="email" placeholder="email@provedor.com" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" required>
                    <div class="invalid-feedback">
                    <?php if(isset($erroEmail)){if($erroEmail !== "Nenhum"){echo $erroEmail;}}?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha<i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" title="Campo obrigatório"></i></i></label>
                    <input type="password" class="form-control <?php if(isset($erroSenha)){if ( $erroSenha !== "Nenhum"){echo"is-invalid";}}?>" id="senha" name="senha" placeholder="Digite uma sennha..." value="<?php if(isset($_POST['senha'])){echo $_POST['senha'];} ?>" required>
                    <div class="invalid-feedback">
                    <?php if(isset($erroSenha)){if($erroSenha !== "Nenhum"){echo $erroSenha;}}?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="repete_senha" class="form-label">Repita sua senha<i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="right" title="Campo obrigatório"></i></i></label>
                    <input type="password" class="form-control <?php if(isset($erroRepeteSenha)){if ( $erroRepeteSenha !== "Nenhum"){echo "is-invalid";}}?>" id="repete_senha" name="repete_senha" placeholder="Repita sua senha..." value="<?php if(isset($_POST['repete_senha'])){echo $_POST['repete_senha'];} ?>" required>
                    <div class="invalid-feedback">
                    <?php if(isset($erroRepeteSenha)){if($erroRepeteSenha !== "Nenhum"){echo $erroRepeteSenha;}}?>
                    </div>
                </div>

                <div class="mt-5">
                    <button type="submit" class="btn btn-primary"><i class="mdi mdi-send "></i>Cadastrar</button>
                </div>




            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script>
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
        </script>
    </body>

</html>