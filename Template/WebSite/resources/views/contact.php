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
                empty($name)   || empty($email)   || empty($subject)
            ) {
                echo "<h4>Informações inválidas!</h4>";
                echo "<a href='contact.php'>Preencher novamente</a>";
            } else {
                echo "<h4>Mensagem enviada com sucesso!</h4>";
                echo "<a href='home.php'>Voltar</a>";
                // Test
                echo "<hr>Nome: $name<br>E-mail: $email<br>Assunto: $subject<br>";
            }
        } else {
            session_start();

            $currentUser = "";
            $currentEmail = "";
            if (isset($_SESSION["user"]) && isset($_SESSION["userID"])) {
                $currentUser = $_SESSION["user"];
                $currentEmail = $_SESSION["userEmail"];
            }

            $local = $_SERVER['PHP_SELF'];
            $html = "
                    <div style='padding: 10px;'>
                        <form action='$local' method='POST'>
                            <label for='firstname'>Nome:</label>
                            <br>
                            <input type='text' name='name' id='name' placeholder='Digite o nome completo' value=\"$currentUser\" required>
                            <br>
                            <label for='email'>E-mail:</label>
                            <br>
                            <input type='email' name='email' id='email' value=\"$currentEmail\" required>
                            <br>
                            <label for='subject'>Assunto:</label>
                            <br>
                            <textarea name='subject' id='subject' placeholder='Descreva o assunto aqui.' required></textarea>
                            <br>
                            <button type='reset'>Limpar</button>
                            <button type='submit'>Enviar</button>
                            <button type='button' onclick=\"location.href='./home.php'\">Voltar</button>
                        </form>
                    </div>
            ";
            // Form
            echo $html;
        }
        ?>
    </div>

    <?php
    include './base/footer.html';
    ?>

</body>

</html>