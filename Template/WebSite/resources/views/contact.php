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
    include './base/header.html';
    ?>

    <div>
        <form action="contact_response.php" method="POST">
            <label for="firstname">Nome:</label><br>
            <input type="text" name="name" id="name" placeholder="Digite o nome completo" required><br>
            <label for="email">E-mail:</label><br>
            <input type="email" name="email" id="email" required><br>
            <label for="subject">Assunto:</label><br>
            <textarea name="subject" id="subject" placeholder="Descreva o assunto aqui." required></textarea>
            <br>
            <button type="reset">Limpar</button><br>
            <hr>
            <div>
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>

    <?php
    include './base/footer.html';
    ?>

    <!-- CUSTOM JS -->

</body>

</html>