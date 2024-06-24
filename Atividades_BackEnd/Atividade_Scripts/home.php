<!--
        Atividade de Inclusão de Scripts PHP.

        Para está atividade é necessário um ambiente de Localhost.

        Fontes úteis:
            https://www.php.net/docs.php
            https://www.w3schools.com/php/default.asp
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino :: BackEnd</title>
</head>

<body>

    <h1>Atividade de Inclusão de Scripts PHP.</h1>
    <hr>

    <!--
        Observe as possibilidades de inclusão e uso de scripts PHP.
    -->
    <?php
        // Caminho relativo
        $diretorio = "./scripts/";

        // Testes Include
        include "bemVindo.php";

        echo $mensagem;
        $novaMensagem = "<p style='color: red;'>" . $mensagem . "</p>";
        echo $novaMensagem;

        include_once "bemVindoUsuario.php";
        $outraMensagem = bemVindo("Desenvolvedor PHP");
        echo "<p style='color: #FF30A0;'>" . $outraMensagem . "</p>";

        $minhaCofiguracao = include "configuracao.php";
        var_dump($minhaCofiguracao);

        include "usuarios1.php"; // Arquivo inexistente.
        echo "<hr>";

        // Testes Require
        require_once "tabela.html";
        require      "tabela.html";
        require_once "tabela.html";

        require "usuarios1.php"; // Arquivo inexistente.
        echo "<hr>";

        echo "<h4>Atividade concluída!</h4>";
    ?>

</body>

</html>