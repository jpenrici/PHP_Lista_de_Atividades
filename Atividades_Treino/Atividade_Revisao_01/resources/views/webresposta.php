<?php
    $name = $cpf = $method = "";
    if (isset($_SERVER['REQUEST_METHOD']) == 'GET') {
        $name   = $_GET['name'];
        $cpf    = $_GET['cpf'];
        $method = $_GET['method'];
        // echo "$name, $cpf, $method";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino : Resposta</title>
</head>

<body>
    <h1>Método <?php echo $method ?></h1>
    <hr>
    <h1><?php echo $name ?></h1>
    <h1><?php echo $cpf ?></h1>

</body>

</html>