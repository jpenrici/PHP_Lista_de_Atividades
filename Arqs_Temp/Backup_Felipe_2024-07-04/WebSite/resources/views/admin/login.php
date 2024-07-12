<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <title>Login Form</title>
</head>
 
<body class="login_body">
    <form action="validate.php" method="POST">
        <div class="container">
            <h1>Login</h1>
            <hr><br><br>
            <label>Username</label>
            <input type="text" placeholder="Enter Username or Email" name="username" id="username" required>
            <br>
            <label>Password</label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>
            <br>
            <div class="clearfix">
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <button type="submit" class="confirmbtn">Login</button>
            </div>
            <br>
            <div class="div_psw" style="padding: 8px; background-color:#f1f1f1">
                <button type="button" class="cancelbtn"><a href="../home.php">Cancel</a></button>
                <span class="psw">Forgot <a href="https://youtu.be/dQw4w9WgXcQ?si=XCWWq4vCSFsBzFuv">password?</a></span>
            </div>
        </div>
    </form>

</body>

</html>