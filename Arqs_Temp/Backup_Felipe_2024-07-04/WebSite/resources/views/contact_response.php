<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWC</title>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../css/home.css">

</head>

<body>

    <?php
    include './base/header.php';
    ?>

    <div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            if (
                is_null($name) || is_null($email) || is_null($subject) ||
                empty($name) || empty($email) || empty($subject)
            ) {
                echo "<h4>Informações inválidas!</h4>";
                echo "<a href='contact.php'>Preencher novamente</a>";
            } else {
                echo "<h4>Mensagem enviada com sucesso!</h4>";
                echo "<a href='home.php'>Voltar</a>";
                echo "<hr>";
                echo "Nome: $name<br>";
                echo "E-mail: $email<br>";
                echo "Assunto: $subject<br>";
            }
        }
        ?>
    </div>

    <?php
    include './base/footer.html';
    ?>

    <!-- CUSTOM JS -->

</body>

</html>