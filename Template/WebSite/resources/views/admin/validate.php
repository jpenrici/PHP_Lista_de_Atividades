<?php
    session_start();

    $url = "../home.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $validate = $_POST['validate'];

        // Conexão com BD.
        require_once "../../../database/config/config.php";
        require_once "../../../database/php/crud_user.php";        

        if ($validate == "login") {
            $userLogin = $_POST['username'];
            $passwordLogin = $_POST['password'];

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
        } elseif ($validate == "register") {
            $usernameRegister = $_POST['username'];
            $emailRegister = $_POST['email'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];
    
            // Validar Registro
            $result = create_user($database, $usernameRegister, $emailRegister, $password1, $password2);
            if ($result) {
                $url = "login.php";
                echo "ops";
            } 
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='refresh' content="0; url=<?php echo $url; ?>">
    <title>JWC</title>
</head>

<body>
    <!-- 
        Página apenas para redirecionamento!
    -->
</body>

</html>