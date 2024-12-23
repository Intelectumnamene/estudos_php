<?PHP

/* $_GET = PEGAR

*/

if (isset($_GET['nome'])){
    $nome = htmlspecialchars($_GET['nome']);

}else{
    $nome = 'Mundo!';
}

if (isset($_GET['cor'])){
    $cor= htmlspecialchars($_GET['cor']);


}else{
    $cor = 'white';
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        background-color: <?php echo $cor; ?>;
    }
</style>

<body <?php if ($nome == "Pedro"){
    echo "style =' background-color: aqua; color:white ;'";

} ?>>
    <h1>Olá! <?php echo $nome; ?></h1>
    <a href="Método $_GET.php/?nome=Gisele&cor=yellow">Ir para Gisele <br></a>
    <a href="Método $_GET.php/?nome=Pedro&cor=green">Ir para Pedro <br> </a>
    <a href="Método $_GET.php/?nome=Maria&cor=red">Ir para Maria <br> </a>
    <a href="Método $_GET.php/?nome=Eva&cor=deeppink">Ir para Eva <br> </a>
</body>
</html>