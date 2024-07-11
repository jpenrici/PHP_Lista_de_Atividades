<?php
    $codigo = 1001;
    $title = "Praticando PHP";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>

    <h1>Missão ocultar!</h1>
    <hr>

    <!-- 
        Objetivo é disponibilizar parte do código dinamicamente
        se a condição de acesso for satisfeita.
    -->
    <?php
        $text = "<button onclick=\"test()\">TESTE</button>
                <script>
                    function test() {
                        window.alert('Eu estou ativo!');
                    }
                </script>";
        
        if ($codigo == 2024) {
            echo $text;
        } else {
            echo "<p><b><i>Você é muito curioso!</i></b></p>";
        }
    ?>

</body>

</html>