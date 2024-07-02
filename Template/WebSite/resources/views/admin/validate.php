<?php
    session_start();

    // Teste
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Capturando os dados vindos do Login.
        $_SESSION["user"] = $_POST['username'];
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0; url=../home.php">
    <title>JWC</title>
</head>

<body>
    <!-- 
        Página apenas para redirecionamento!
    -->
</body>

</html>