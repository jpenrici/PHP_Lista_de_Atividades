<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP :: Hello World!</title>

    <!-- CSS -->
    <style>
        .titulo {
            color: rgb(209, 14, 226);
        }

        .subtitulo {
            color: chocolate;
            font-style: italic;
        }
    </style>

</head>

<body>

    <h1 class="titulo">Bem-Vindo Desenvolvedor Web!</h1>
    <h2 id="recado" class="subtitulo"></h2>

    <!-- PHP -->
    <?php
	    echo "Hello World, <b>PHP!</b>";
    ?>

    <!-- JavaScript -->
    <script>
        document.getElementById("recado").innerHTML = "Vamos relembrar HTML, CSS, JS (Front-end) e iniciar PHP (Back-end)!";
    </script>

</body>

</html>