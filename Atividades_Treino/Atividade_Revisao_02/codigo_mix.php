<!--
    Objetivo desta prática é demonstrar a versatilidade do PHP.
-->
<?php
    $nomeDoUsuario = "Fulano de Tal";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando PHP</title>
</head>

<?php
    $idadeDoUsuario = 52;
?>

<body>

    <?php
        $scriptHtml = " <script>
                            function onBtnClick(value) {
                                switch (value) {
                                    case 1:
                                        window.alert(\"Click on PHP interno!\");
                                        break;
                                    case 2:
                                        window.alert(\"Click on PHP externo!\");
                                        break;            
                                    default:
                                        window.alert(\"Falhou!\");                      
                                        break;
                                }
                            }

                            function mesage(text, number) {
                                document.getElementById('paragrafo' + number).innerHTML = text;
                            }
                        </script>";
        echo $scriptHtml;
    ?>

    <h1>Prática de PHP</h1>
    <h2>Olá, <?php echo $nomeDoUsuario; ?>.</h2>

    <?php
        $mensagem = "";
        if ($idadeDoUsuario < 12) {
            $mensagem = "Você é infantil!";
        }
        if ($idadeDoUsuario >= 12 && $idadeDoUsuario < 18) {
            $mensagem = "Você é adolescente!";
        }
        if ($idadeDoUsuario >= 18) {
            $mensagem = "Você é adulto!";
        }
        echo "<p><b>$mensagem</b></p>";

        $html = "<button onclick='onBtnClick(1)'>Clique-me!</button>";
        echo "<hr>$html<hr>";

        $html = "<button onclick='mesage(\"Mensagem 1!\", 1)'>Mensagem 1!</button>";
        echo "<p id=\"paragrafo1\"></p>";
        echo $html;

    ?>

    <p><b><?php echo $mensagem; ?></b></p>

    <hr>
    <?php echo "<button onclick='onBtnClick(2)'>Clique-me!</button>"; ?>
    <hr>

    <p id="paragrafo2"></p>

    <button onclick='mesage("Mensagem 2!", 2)'>Mensagem 2!</button>

</body>

</html>