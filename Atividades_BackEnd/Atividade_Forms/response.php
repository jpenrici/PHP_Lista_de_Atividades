<!--
        Atividade Formulários e Métodos GET e POST.

        Para está atividade é necessário um ambiente de Localhost.

        Fontes úteis:
            https://www.php.net/docs.php
            https://www.w3schools.com/php/default.asp
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de BackEnd</title>
</head>

<body>

    <h1>Respostas</h1>
    <hr>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $mensagemRecebida = $_GET['mensagemGet'];
            echo "<h4>GET: $mensagemRecebida</h4>";
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mensagemRecebida = $_POST['mensagemPost'];
            echo "<h4>POST: $mensagemRecebida</h4>";
        }
    ?>
    
</body>

</html>