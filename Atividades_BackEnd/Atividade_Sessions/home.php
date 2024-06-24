<!--
        Atividade de Sessions

        Para está atividade é necessário um ambiente de Localhost.

        Fontes úteis:
            https://www.php.net/docs.php
            https://www.w3schools.com/php/default.asp
-->
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de BackEnd</title>
</head>

<body>

    <h1>Atividade Sessions : Página 01 </h1>
    <hr>

    <?php
        $_SESSION["usuario"] = "Fulano de Tal";

        date_default_timezone_set("America/Sao_Paulo");
        $_SESSION["ultimoAcesso"] = date("d/m/Y H:i");

        echo "Sessão configurada!";
    ?>

    <a href="login.php">
        <button>Login</button>
    </a>

</body>

</html>