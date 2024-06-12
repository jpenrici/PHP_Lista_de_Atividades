<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Treino</title>
</head>

<body>
    <h1>Prática de Tradução</h1>
    <hr>

    <h2>PHP</h2>
    <!--
        Fontes úteis:
        https://www.php.net/docs.php
        https://www.w3schools.com/php/default.asp
    -->
    <?php 
        // Escreva aqui código equivalente.
        $valorDoSalario = "1640";
        $valeTransporte = floatval($valorDoSalario) * 0.06;
        $planoDeSaude = floatval($valorDoSalario) * 0.03;
        $valorDoSalarioLiquido = $valorDoSalario - $valeTransporte - $planoDeSaude;
        $mensagem = "Salário: " . $valorDoSalario . "<br>Vale-transporte: " . $valeTransporte . "<br>Plano de saúde: " . $planoDeSaude
            . "<br>Saldo: " . $valorDoSalarioLiquido;

        echo "$mensagem";
    ?>

    <hr>
    <h2>JavaScript</h2>
    <p id="msg"></p>

    <script>
        let valorDoSalario = "1640";
        let valeTransporte = parseFloat(valorDoSalario) * 0.06;
        let planoDeSaude = parseFloat(valorDoSalario) * 0.03;
        let valorDoSalarioLiquido = valorDoSalario - valeTransporte - planoDeSaude;
        let mensagem = "Salário: " + valorDoSalario + "<br>Vale-transporte: " + valeTransporte + "<br>Plano de saúde: " + planoDeSaude
            + "<br>Saldo: " + valorDoSalarioLiquido;

        document.getElementById("msg").innerHTML = mensagem;
    </script>

</body>

</html>