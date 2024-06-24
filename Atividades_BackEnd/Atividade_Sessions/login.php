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
<html>

<body>

    <h1>Atividade Sessions : Página 02 </h1>
    <hr>

    <?php
        if (isset($_SESSION["usuario"])) {
            echo "<h4>Sessão Ativa</h4>";
            echo "Usuário: " . $_SESSION["usuario"] . "<br>";
            echo "Acesso : " . $_SESSION["ultimoAcesso"] . "<br>";
        } else {
            echo "Não há sessão ativa!<br>";
        }

        session_destroy();
    ?>

</body>

</html>