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

    /*
        Função para retornar uma string com "Bom dia!", "Boa tarde!" ou "Boa noite!" conforme a hora real, quando chamado.
    */

    /*
        Função para retornar um HTML Table genêrico de M linhas por N colunas,
        preenchidos com um Valor como parâmetro.
    */

    /*
        Função para retornar um HTML Table ao receber um Vetor (Array unidimensional).
    */ 

    /*
        Função para retornar um HTML Table ao receber uma Matriz (Array bidimensional).
    */    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de BackEnd</title>
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
        // Escreva aqui o código.
    ?>

    <hr>

    <!--
    2.
        Chame a função para exibir a saudação conforme a hora.
    -->
    <?php
        // Escreva aqui o código.
    ?>

    <hr>

    <!--
    3.
        Chame a função para criar uma tabela de 05 linhas e 03 colunas
        preenchido com uma tag Button de cor azul, rótulo "Clique-me"
        e atributo de evento onclick="notificar()".
    -->
    <?php
        // Escreva aqui o código.
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

        // Escreva aqui o código para chamar a função.
    ?>

    <hr>

    <!--
    5.
        Chame a função para criar uma tabela com a Matriz.
    -->
    <?php
        // Pesquise 08 processadores e o preço para completar a Matriz.
        $listaDePrecos = array(
            array("processador" => "Intel Core I5", "preco" => 690.00),
            array("processador" => "AMD Ryzen 5", "preco" => 469.99)
        );

        // Escreva aqui o código para chamar a função.
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