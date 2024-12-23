<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Upload de Arquivos</title>
</head>

<body>

    <div class="container">
        <h1 class="mt-5 text-center">Upload de Arquivos</h1>
        <form action="" method="post" enctype="multipart/form-data" class="m-3">
            <div class="input-group">
                <input type="file" class="form-control" id="arquivo" name="arquivo[]" multiple required>
                <button class="btn btn-primary" type="submit" name="enviar" id="enviar">Enviar</button>
            </div>
        </form>
    </div>

    <?php
    if (isset($_POST["enviar"])) {
        echo "<h2 class='text-center mt-5'>Arquivos Recebidos:</h2>";
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";

        // Validações
        if (!empty($_FILES['arquivo']['name'][0])) {
            foreach ($_FILES['arquivo']['name'] as $key => $name) {
                $tmp_name = $_FILES['arquivo']['tmp_name'][$key];
                $size = $_FILES['arquivo']['size'][$key];
                $error = $_FILES['arquivo']['error'][$key];

                // Verifica se houve erro no upload
                if ($error === UPLOAD_ERR_OK) {
                    echo "<p>Arquivo <strong>$name</strong> enviado com sucesso!</p>";
                } else {
                    echo "<p>Erro ao enviar o arquivo <strong>$name</strong>.</p>";
                }
            }
        } else {
            echo "<p>Nenhum arquivo foi enviado.</p>";
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT5+4gpI2Ew3rZnqQtFCLpTjtBOZ2Gm1LDd+KByNIY" crossorigin="anonymous"></script>

</body>

</html>

</html>