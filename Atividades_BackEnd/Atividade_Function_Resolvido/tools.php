<!--
        Dicas:

            1) Leia atentamente todas as linhas de código, antes de iniciar.
            3) Leia cada linha comentada, escreva o código abaixo e teste (observe).

        Para está atividade é necessário um ambiente de Localhost.

        Fontes úteis:
            https://www.php.net/docs.php
            https://www.w3schools.com/php/default.asp
-->

<!-- Escreva aqui as funções PHP -->
<?php
    // Função Exemplo
    function hello($nome) {
        return "<p>Olá, <b>" . $nome . "</b> !</p>";
    }

    /*
        Função para exibir a Data e hora real, quando chamado.
    */
    function agora() {
        // Configuração do Fuso Horário.
        date_default_timezone_set("America/Sao_Paulo");
        // Saída pré-formatada.
        return date("d/m/Y H:i");
    }

    /*
        Função para retornar uma string com "Bom dia!", "Boa tarde!" ou "Boa noite!" conforme a hora real, quando chamado.
    */
    function saudacao() {
        date_default_timezone_set("America/Sao_Paulo");
        $hora = date("H");
        $mensagem = "Bom Dia!";
        if ($hora >= 12) {
            $mensagem = "Boa Tarde!";
        }
        if ($hora >= 18) {
            $mensagem = "Boa Tarde!";
        }
        // Saída.
        return $mensagem;
    }

    /*
        Função para retornar um HTML Table genêrico de M linhas por N colunas,
        preenchidos com um Valor como parâmetro.
    */
    function tabela($linhas, $colunas, $valor) {
        $resultado = "<table>";
        for ($i = 0; $i < $linhas; $i++) {
            $resultado .= "<tr>";
            for ($j = 0; $j < $colunas; $j++) {
                // Preenchimento com mesmo valor.
                $resultado .= "<td>" . $valor . "</td>";
            }
            $resultado .= "</tr>";
        }
        $resultado .= "</table>";
        // Saída.
        return $resultado;
    }

    /*
        Função para retornar um HTML Table ao receber um Vetor (Array unidimensional).
    */
    function tabela_vetor($vetor, $horizontal = false) {
        $resultado = "<table>";
        $resultado .= $horizontal ? "<tr>" : "";
        for ($i = 0; $i < count($vetor); $i++) {
            $resultado .= $horizontal ? "" : "<tr>";
            $resultado .= "<td>" . $vetor[$i]. "</td>";
            $resultado .= $horizontal ? "" : "</tr>";
        }
        $resultado .= $horizontal ? "</tr>" : "";
        $resultado .= "</table>";
        // Saída.
        return $resultado;
    }

    /*
        Função para retornar um HTML Table ao receber uma Matriz (Array bidimensional).
    */
    function tabela_matriz($valores) {
        $resultado = "";
        if (is_array($valores)) {
            $resultado = "<table>";
            foreach ($valores as $item) {
                $resultado .= "<tr>";
                if (is_array($item)) {
                    foreach ($item as $subitem) {
                        $resultado .= "<td>" . $subitem. "</td>";
                    }
                } else {
                    $resultado .= "<td>" . $item . "</td>";
                }
                $resultado .= "</tr>";
            }
            $resultado .= "</table>";
        } 
        // Saída.
        return $resultado;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de BackEnd</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            padding: 4px;
        }
    </style>

</head>

<body>
    <!-- Desenvolva os códigos para exibir no navegador as respostas. -->

    <h1>Atividade de Funções</h1>

    <?php
        $msg = hello("Dev");
        echo $msg;
    ?>

    <hr>

    <!--
    1.
        Chame a função para exibir Data e Hora.
    -->
    <?php
        echo agora();
    ?>

    <hr>

    <!--
    2.
        Chame a função para exibir a saudação conforme a hora.
    -->
    <?php
        echo saudacao();
    ?>

    <hr>

    <!--
    3.
        Chame a função para criar uma tabela de 05 linhas e 03 colunas
        preenchido com uma tag Button de cor azul, rótulo "Clique-me"
        e atributo de evento onclick="notificar()".
    -->
    <?php
        $valor = "<button style='background-color: blue'; onclick='notificar()'>Clique-me</button>";
        echo tabela(5, 3, $valor);
    ?>

    <hr>

    <!--
    4.
        Chame a função para criar uma tabela com o Vetor.
    -->
    <?php
        $carrosEletricos = array(
            "Caoa Chery iCar", "Renault Kwid E-Tech", "JAC E-JS1", "BYD Dolphin"
        );

        // Vertical.
        echo "<p>" . tabela_vetor($carrosEletricos) . "</p>";
        // Horizontal.
        echo "<p>" . tabela_vetor($carrosEletricos, true) . "</p>";
    ?>

    <hr>

    <!--
    5.
        Chame a função para criar uma tabela com a Matriz.
    -->
    <?php
        // Pesquise 08 processadores e o preço para completar a Matriz.
        $listaDePrecos = array(
            array("processador" => "Intel Core I5",       "preco" =>  690.00),
            array("processador" => "AMD Ryzen 5",         "preco" =>  469.99),
            array("processador" => "AMD Ryzen 3",         "preco" =>  560.80),
            array("processador" => "Intel Core I3",       "preco" =>  568.50),
            array("processador" => "Intel Celeron G5905", "preco" =>  231.34),
            array("processador" => "Intel Pentium G6400", "preco" =>  449.90),
            array("processador" => "AMD Ryzen 7",         "preco" => 1103.00),
            array("processador" => "Intel Core I9",       "preco" => 4289.50)
        );

        // Tabela
        echo tabela_matriz($listaDePrecos);
    ?>

    <hr>

    <!-- <button onclick="notificar()">Teste</button> -->

    <!-- JavaScript -->
    <script>
    var contadorDeCliques = 0;

    function notificar() {
        contadorDeCliques++;
        window.alert("Cliques: " + contadorDeCliques);
        console.log("Cliques: " + contadorDeCliques);
    }
    </script>

</body>

</html>