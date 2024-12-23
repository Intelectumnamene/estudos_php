<?php $saudar = "Olá mundo!";
$html = "<h1>Olá mundo!</h1> <p>Feito com HTML dentro do PHP! </p>";
$js = "<script>alert('Criado com PHP !')</script>";
$mensagem = "<script>document.getElementById('teste').innerHTML='Mensagem feita com javaScript dentro  do PHP!'</script>";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?Php $ativado = 'não'; ?>
    <?Php if ($ativado == 'sim') { ?>
        <h1>Está ativado</h1>
    <?Php } else { ?>
        <h1> Não está ativado</h1>
    <?Php } ?>



    <p id="teste">
        <?php echo $mensagem ?>
    </p>

    <h1>
        <?php echo $saudar; ?>
        <?php echo $html; ?>
        <?php echo $js; ?>
    </h1>


</body>



</html>