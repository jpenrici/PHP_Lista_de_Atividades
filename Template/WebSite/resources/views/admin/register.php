<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <title>Account Register Form</title>
</head>

<body>

    <form action="validate.php" method="POST">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <input type="hidden" name="validate" value="register">
            <label>Username</label>
            <input type="text" placeholder="Enter Username" name="username" id="username" required>
            <br>
            <label>Email</label>
            <input type="email" placeholder="Enter Email" name="email" id="email" required>
            <br>
            <label>Password</label>
            <input type="password" placeholder="Enter Password" name="password1" id="password1" required>
            <br>
            <label>Repeat Password</label>
            <input type="password" placeholder="Repeat Password" name="password2" id="password2" required>
            <br>
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
            <div class="clearfix">
                <button type="submit" class="confirmbtn">Register</button>
            </div>
            <div class="clearfix">
                <p>Already have an account? <a href="./login.php">Sign in</a>.</p>
            </div>
        </div>
    </form>

</body>

</html>