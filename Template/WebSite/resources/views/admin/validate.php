<?php
    session_start();

    // Teste
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $userLogin = $_POST['username'];
        $passwordLogin = $_POST['password'];

        // Conexão com BD.
        require "../../../database/config/config.php";
        require "../../../database/php/crud_user.php";

        // Validar
        $result = read_user_by_username($database, $userLogin);
        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            if ($userLogin == $row['username'] && $passwordLogin == $row['password']) {
                // Criando Sessão.
                $_SESSION["user"] = $userLogin;
                $_SESSION["userID"] = $row['id'];
                break;
            }
        }
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