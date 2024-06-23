<!--
        Dicas:

            1) Leia atentamente todas as linhas de código, antes de iniciar.
            3) Leia cada linha comentada, escreva o código abaixo e teste (observe).

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
    <title>Atividade de BackEnd</title>
</head>

<body>
    <!-- Desenvolva os códigos para exibir no navegador as respostas. -->

    <h1>Atividade de Estrutura de Repetição</h1>
    <hr>

    <h2>Para Até (For)</h2>

    <hr>

    <!--
    1.
        Utilize o comando For em estrutura simples (único loop) para exibir o resultado
        da contagem de -50 a 50. Exiba cada valor inteiro, um a um.
        Exiba o resultado neste HTML em formato amigável, em texto explicativo!
        Por exemplo: "1º : -50 , 2º : -49".
    -->
    <?php
        $texto = "";
        $contador = 1;
        $valorInicial = -50;
        $valorFinal   =  50;
        $incremento   =   1;
        for ($i = $valorInicial; $i <= $valorFinal; $i += $incremento) { 
            $texto .= "<b>" . $contador . "º</b> : " . $i;
            if ($contador % 10 == 0) {
                $texto .= "\n";
            } elseif ($i < $valorFinal) {
                $texto .= " , ";
            } 
            $contador++;
        }
        echo "<pre>" . $texto . "</pre>";
    ?>

    <hr>

    <!--
    2.
        Utilize o comando For em estrutura simples (único loop) para exibir o resultado
        dos 15 primeiros números da sequência que segue está lógica: 3, 6, 18, 4, 8, 24, 5, 10, 30, 6, 12, 36 ... .
        Exiba o resultado neste HTML em formato amigável, organizado!
        Mostre se possível como os cálculos estão sendo executados.
    -->
    <?php
        $texto = "";
        $v1 = 3;
        for ($i = 0; $i < 15; $i += 3) {
            $v2 = $v1 * 2;
            $v3 = $v2 * 3;
            $texto .= " $v1, $v2, $v3 <br>";
            $v1++;
        }
        echo "<pre>" . $texto . "</pre>";
    ?>

    <hr>

    <!--
    3.
        Utilize o comando For em estrutura simples (único loop) para construir uma saída usando asteriscos,
        que irá "desenhar" o exemplo abaixo. Faça de forma variável, ou seja, podendo alterar as entradas.
        Aplique estilos de cor para tornar o resultado mais atrativo! Use a criatividade!
        Exiba o resultado neste HTML!

        Exemplo: AlturaDaCopa = 5, AlturaDoTronco = 2.

                       *       
                      ***  
                     *****
                    *******
                   ********* 
                      ***
                      ***
    -->
    <?php
        // Entradas
        $alturaDaCopa   = 5;
        $alturaDoTronco = 2;
        
        // Construir
        $copa   = "";
        $tronco = "";
        for ($i = 0; $i < $alturaDaCopa; $i++) { 
            $copa .= str_repeat(" ", $alturaDaCopa - $i);
            $copa .= str_repeat("*", $i) . "*" . str_repeat("*", $i) . "\n";
            if ($i < $alturaDoTronco) {
                $tronco .= str_repeat(" ", $alturaDaCopa - 1);
                $tronco .= str_repeat("*", 3) . "\n";
            }
        }

        // Exibir
        echo "<pre style=\"color: green; margin: 0px;\">" . $copa . "</pre>";
        echo "<pre style=\"color: brown; margin: 0px;\">" . $tronco . "</pre>";
    ?>

    <hr>

    <!--
    4.
        Utilize o comando For em estrutura dupla (For dentro de For) para exibir a construção
        de uma Tabela sem Cabeçalho contendo em cada célula o número da linha e o número da coluna.
        Utilize a tag Table com bordas para melhor visualização.
        Faça de forma variável, ou seja, podendo alterar as entradas.
        Exiba o resultado neste HTML em formato amigável, atrativa!

        Exemplo: Construção de uma Tabela de 2 linhas por 2 colunas.

                 +-------------------+-------------------+
                 | Linha 1, Coluna 1 | Linha 1, Coluna 2 |
                 +-------------------+-------------------+
                 | Linha 2, Coluna 1 | Linha 2, Coluna 2 |
                 +-------------------+-------------------+           
    -->
    <?php
        // Entradas
        $linhas  = 2;
        $colunas = 2;
            
        // Constrir
        $estilo = "style='border: 1px solid black;'";
        $tabela = "<table $estilo>";
        for ($i = 0; $i < $linhas; $i++) {
            $tabela .= "<tr>";
            for ($j = 0; $j < $colunas; $j++) {
                $tabela .= "<td $estilo>Linha $i, Coluna $j </td>"; 
            }
            $tabela .= "</tr>";
        } 
        $tabela .= "</table>";

        // Exibir
        echo $tabela;
    ?> 

    <hr>

    <!--
    5.
        Utilize o comando For em estrutura dupla (For dentro de For) para exibir a construção
        de uma Tabela gerando um tabuleiro de Xadrez. 
        Faça de forma variável, ou seja, podendo alterar as entradas.
        Aplique estilos de cor para tornar o resultado mais atrativo! Use a criatividade!
        Exiba o resultado neste HTML!
    -->
    <?php
        // Entradas
        $linhas  = 6;
        $colunas = 6;
                    
        // Constrir
        $cor1 = "blue";
        $cor2 = "green";
        $tabela = "<table>";
        for ($i = 0; $i < $linhas; $i++) {
            $tabela .= "<tr>";
            for ($j = 0; $j < $colunas; $j++) {
                $color = ($j % 2 == 0) ? $cor1 : $cor2;
                if ($i % 2 == 0) {
                    $color = ($j % 2 == 0) ? $cor2 : $cor1;
                }
                $tabela .= "<td style=\"width: 20px; height: 20px; background-color: $color \"></td>"; 
            }
            $tabela .= "</tr>";
        } 
        $tabela .= "</table>";

        // Exibir
        echo $tabela;
    ?>

    <hr>

    <h2>Enquanto (While)</h2>

    <hr>

    <!--
    6.
        Utilize o comando While para exibir os 30 números divisíveis por 3 e por 4 ao mesmo tempo.
        Exiba o resultado neste HTML em formato amigável, atrativa!
    -->
    <?php
        $texto = "";
        $numero   = 0;
        $contador = 0;
        while ($contador < 30) {
            if (($numero % 3 == 0) && ($numero % 4 == 0)) {
                $texto .= ($contador % 2 == 0) ? "<b> $numero </b>" : " $numero ";
                $contador++;
            }
            $numero++;
        }
        echo $texto;
    ?>

    <hr>

    <!--
    7.
        Utilize o comando While para exibir a conversão da temperatura de Grau Celsius para Grau Fahrenheit.
        Exiba 20 conversões de temperatura como resultado neste HTML em formato amigável, atrativo!
    -->
    <?php
        $texto = "";
        $Celsius  = 0;
        $contador = 1;
        while ($contador <= 20) {
            $Fahrenheit = ($Celsius * 9 / 5) + 32;
            $texto .= "$contador)<b> $Celsius ºC </b>= $Fahrenheit ºF<br>";
            $Celsius += 2.5;
            $contador++;
        }
        echo "<pre>" . $texto . "</pre>";
    ?>

    <hr>

    <!--
    8.
        Utilize o comando While para exibir a sequência de 100 caracteres seguindo a lógica: \o/_o_/o\_\o/_o_/o\_
        Exiba o resultado neste HTML!
    -->
    <?php
        // Sem manipulação de String.
        $texto = "";
        $contador = 0;
        $limite   = 100;
        while ($contador < $limite) {
            $texto .= "$contador) ";
            $texto .=  $contador++ < $limite ? "\\" : "";
            $texto .=  $contador++ < $limite ? "o" : "";
            $texto .=  $contador++ < $limite ? "/" : "";
            $texto .=  $contador++ < $limite ? "_" : "";
            $texto .=  $contador++ < $limite ? "o" : "";
            $texto .=  $contador++ < $limite ? "_" : "";
            $texto .=  $contador++ < $limite ? "/" : "";
            $texto .=  $contador++ < $limite ? "o" : "";
            $texto .=  $contador++ < $limite ? "\\" : "";
            $texto .=  $contador++ < $limite ? "_" : "";
            $texto .=  "\n";
        }
        echo "<pre>" . $texto . "</pre>";       
    ?>

    <hr>

    <h2>Faça Até (Do While)</h2>   

    <hr>
    
    <!--
    9.
        Utilize o comando Do While para exibir os 25 números divisíveis por 2, por 4 e por 6 ao mesmo tempo.
        Exiba o resultado neste HTML em formato amigável, atrativa!
    -->
    <?php
        $texto = "";
        $numero   = 0;
        $contador = 0;
        do {
            if (($numero % 2 == 0) && ($numero % 4 == 0) && ($numero % 6 == 0)) {
                $texto .= ($contador % 2 == 0) ? "<b> $numero </b>" : " $numero ";
                $contador++;
            }
            $numero++;
        } while ($contador < 25);
        echo $texto;
    ?>

    <hr>
    
    <!--
    10.
        Utilize o comando Do While para exibir a conversão de Metros quadrados para Centímetros quadrados.
        Exiba 25 resultados neste HTML em formato amigável, atrativa!
    -->
    <?php
        $texto = "";
        $contador = 0;
        $metroQuadrados = 0;
        do {
            // 1 m² = 100 cm x 100 cm = 10000;
            $centimetroQuadrado = $metroQuadrados * 10000;
            $texto .= "$contador)<b> $metroQuadrados m<sup>2</sup> </b>= $centimetroQuadrado cm<sup>2</sup> <br>";
            $metroQuadrados += 25; 
            $contador++;           
        } while ($contador < 25);
        echo $texto;
    ?>

</body>

</html>