<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nameNewsletter'];
    $email = $_POST['emailNewsletter'];
    if (is_null($name) || is_null($email) || empty($name) || empty($email)) {
        echo "<h4>Informações inválidas!</h4>";
    } else {
        echo "<h4>Newsletter cadastrado com sucesso!</h4>";
        echo "<a href='home.php'>Voltar</a>";
        echo "<hr>";
        echo "Nome: $name<br>";
        echo "E-mail: $email<br>";
    }
}
?>