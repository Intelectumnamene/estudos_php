<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-5 text-center">Upload de arquivos</h1>
        <form action="" method="post" enctype="multipart/form-data" class="m-3">
            <div class="input-group">
                <input type="file" class="form-control" id="arquivo" name="arquivo" aria-describedby="arquivo" aria-label="Upload" required>
                <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
            </div>


        </form>


    </div>

    <?php
    if (isset($_POST["enviar"])) {
        // echo "<pre>";
        // var_dump($_FILES);
        // echo "<pre>";

        //validações

        $tamanhoMax = 2097152; //2MB
        $permitido = array("jpg", "png", "jpeg", "mp4");
        $extensao = pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION);

        //verificar tamanho permitido

        if ($_FILES['arquivo']['size'] >= $tamanhoMax) {
           
            echo '<div class="alert alert-danger" role="alert">
                    Tamanho máxio de 2 Mb. Não foi possível fazer Upload!
                    </div>';
        } else {
            //verificar se extensão é permitida
            if (in_array($extensao, $permitido)) {
                //echo "Permitido";
                $pasta = "imagens/";
                if (!is_dir($pasta)) {
                    mkdir($pasta, 0755, true);
                }

                $tmp = $_FILES["arquivo"]["tmp_name"];
                $novoNome = uniqid() . ".$extensao";


                if (move_uploaded_file($tmp, $pasta . $novoNome)) {
                    echo '<div class="alert alert-success" role="alert">
                    Upload realizado com sucesso! 
                    </div>';
                } else {
                    echo '<div class="alert alert-danger" role="alert">
                    Erro: Não foi possível fazer Upload!
                    </div>';
                    
                }
            } else {

                echo '<div  class="alert alert-danger" role="alert">
                Erro: Extensão ('.$extensao.')não permitida!
                </div>';
                
            }
        }
    }




    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT5+4gpI2Ew3rZnqQtFCLpTjtBOZ2Gm1LDd+KByNIY" crossorigin="anonymous"></script>

</body>

</html>