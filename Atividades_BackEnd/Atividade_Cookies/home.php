<!--
        Atividade de Cookies

        Para está atividade é necessário um ambiente de Localhost.

        Fontes úteis:
            https://www.php.net/docs.php
            https://www.w3schools.com/php/default.asp
-->

<?php
    date_default_timezone_set("America/Sao_Paulo");

    $nome_cookie   = "ultimaVisita";
    $valor_cookie  = date("d/m/Y H:i");
    $tempoDeEspera = 20; // segundos
    
    setcookie($nome_cookie, $valor_cookie, time() + $tempoDeEspera); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de BackEnd</title>
</head>

<body>

    <h1>Atividade Cookies</h1>
    <h3>Testar com a Ferramenta do Desenvolvedor aberta!</h3>
    <hr>

    <?php
        if(isset($_COOKIE['ultimaVisita'])) {
            $last = $_COOKIE['ultimaVisita'];
            echo "Bem-Vindo novamente!<br> Última visita em ". $last;
        } else {
            echo "Bem-Vindo! Cookie expira em " . $tempoDeEspera . " segundos.";            
        }
    ?>

    <h3 id="mensagem"></h3>

    <script>
        function atualizar() {
            let mensagem = "Contador: " + contador + " segundos.";
            document.getElementById("mensagem").innerHTML = mensagem;
            contador++;
        }

        let contador  = 0;
        let intervalo = 1000; // milisegundos
        setInterval(function() { atualizar() }, intervalo);
    </script>

</body>

</html>