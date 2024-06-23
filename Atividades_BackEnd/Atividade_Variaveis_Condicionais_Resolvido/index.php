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
    <title>Atividades BackEnd</title>
</head>

<body>
    <!-- Desenvolva os códigos para exibir no navegador as respostas. -->

    <h1>Atividade Variáveis</h1>
    <hr>

    <!--
    1.
        Declare a variável Resultado.
        Atribua ao Resultado o valor do tipo string: "<p>Olá Desenvolvedor PHP!</p>".
        Exiba o resultado neste HTML.
    -->
    <?php
        $resultado = "<p>Olá Desenvolvedor PHP!</p>";
        echo $resultado;
    ?>

    <hr>

    <!--
    2.
        Declare as variáveis Nome, Resultado.
        Atribua em Nome: o seu nome.
        Atribua ao Resultado: "Bem-vindo! Olá, Nome!", usando a variável Nome.
        Exiba o resultado neste HTML.
    -->
    <?php
        $nome = "Fulano de Tal";
        $resultado = "<p>Bem-vindo! Olá, $nome!</p>";
        echo $resultado;        
    ?>

    <hr>

    <!--
    3.
        Declare as variáveis Valor, Desconto, Resultado.
        Atribua ao Resultado o cálculo que aplique o desconto no valor. Crie valores para teste.
        Exiba o resultado na forma de parágrafo neste HTML.
        Exiba o resultado no formato texto. Por exemplo, "O valor igual a 10 é 10% do valor 100.".
    -->
    <?php
        $valor = 100;
        $desconto = 10;
        $resultado = $valor * $desconto / 100;
        echo "<p>O valor igual a $resultado é $desconto% do valor $valor.";
    ?>

    <hr>

    <!--
    4.
        Declare as variáveis Velocidade, Resultado.
        Atribua ao Resultado o cálculo da conversão de m/s para km/h, usando a Velocidade.
        Exiba o resultado na forma de parágrafo e formatação negrito para o valor numérico com a unidade.
        Exiba o resultado como informação atrativa em formato texto!
    -->
    <?php
        $velocidade = 100; // m/s
        $resultado = $velocidade * 3.6;
        echo "<p>A velocidade de <b>$velocidade m/s</b> é igual a <b>$resultado km/h</b>.";
    ?>

    <hr>

    <!--
    5.
        Declare as variáveis Comprimento, Largura, Altura, Volume (Resultado).
        Atribua ao Resultado o cálculo do volume de uma caixa retangular.
        Exiba o resultado na forma de parágrafo e formatação itálico.
        Exiba o resultado como informação atrativa em formato texto!
    -->
    <?php
        $altura = 10;
        $largura = 10;
        $comprimento = 10;        
        $volume = $comprimento * $largura * $altura;
        echo "<p><i>O volume de um retângulo de $comprimento x $largura x $altura é $volume.</i><p>"
    ?>

    <hr>

    <!--
    6.
        Declare as variáveis Comprimento, Largura, Altura, Volume (Resultado).
        Atribua ao Resultado o cálculo do volume de uma pirâmide.
        Exiba o resultado na forma de parágrafo e formatação itálico e cor da fonte azul.
        Exiba o resultado como informação atrativa em formato texto!
    -->
    <?php
        $comprimento = 5;
        $largura = 5;
        $altura = 9;
        $areaDaBase = $comprimento * $largura;
        $volume = $areaDaBase * $altura / 3;
        echo "<p style='color: blue';><i>O volume de uma pirâmede de $comprimento x $largura de base e altura $altura é $volume.</i><p>"
    ?>

    <hr>

    <!--
    7.
        Declare a variável Resultado.
        Atribua ao Resultado o valor do tipo string para construir uma lista ordenada,
        contendo as 20 linguagens de programação mais utilizadas segundo o site https://www.tiobe.com/.
        Exiba o resultado neste HTML.
    -->
    <?php
        // Junho 2024
        $resultado = "
            <ol>
                <li>Python</li>
                <li>C++</li>
                <li>C</li>
                <li>Java</li>
                <li>C#</li>
                <li>JavaScript</li>
                <li>Go</li>
                <li>SQL</li>
                <li>Visual Basic</li>
                <li>Fortran</li>
                <li>Dephi</li>
                <li>Swift</li>
                <li>Assembly</li>
                <li>MATLAB</li>
                <li>PHP</li>
                <li>Scratch</li>
                <li>Rust</li>
                <li>Ruby</li>
                <li>Kotlin</li>
                <li>Cobol</li>
            </ol>
        ";
        echo $resultado;
    ?>

    <hr>

    <!--
    8.
        Declare a variável Resultado.
        Atribua ao Resultado o valor do tipo string para construir uma tabela
        para listar 5 marcas de liquidificador, com nome, fabricante, preço.
        Exiba o resultado neste HTML.
    -->
    <?php
        $resultado = "
            <table border = 1>
                <tr>
                    <th>Nome</th>
                    <th>Fabricante</th>
                    <th>Preço</th>                                        
                </tr>
                <tr>
                    <td>Turbo Power</td>
                    <td>Mondial</td>
                    <td>96,90</td>
                </tr>
                    <tr>
                    <td>PH900</td>
                    <td>Philco</td>
                    <td>129,90</td>
                </tr>
                <tr>
                    <td>Série 5000</td>
                    <td>Philips Walita</td>
                    <td>269,90</td>
                </tr>
                <tr>
                    <td>Diamante 800</td>
                    <td>Britânia</td>
                    <td>104,40</td>
                </tr>
                <tr>
                    <td>Turbo Inox L-1000</td>
                    <td>Mondial</td>
                    <td>149,90</td>
                </tr>                                            
            </table>
        ";
        echo $resultado;
    ?>

    <hr>
    <h1>Atividade Estrutura Condicional</h1>
    <hr>

    <!--
    9.
        Declare as variáveis Nota1, Nota2, Nota3, Nota4, Nota5 e Média (Resultado).
        Atribua ao Resultado o cálculo da média das notas.
        Exiba o resultado na forma de parágrafo, indicando se o aluno está reprovado (nota menor que seis) ou aprovado.
        Exiba o resultado como informação atrativa em formato texto!
    -->
    <?php
        // Entradas
        $Nota1 = 5.2;
        $Nota2 = 7.5;
        $Nota3 = 6.0;
        $Nota4 = 10.0;

        // Processar
        $Media = ($Nota1 + $Nota2 + $Nota3 + $Nota4) / 4;
        $resultado = "Aprovado";
        if ($Media < 6) {
            $resultado = "Reprovado";
        }
        
        // Exibir
        echo "<p>O Aluno com as Notas ($Nota1, $Nota2, $Nota3, $Nota4) ficou com média $Media e foi $resultado!";
    ?>

    <hr>

    <!--
    10.
        Declare as variáveis Altura, Peso e IMC ou Resultado.
        Atribua no Resultado o cálculo do IMC.
        Crie valores para teste.
        Exiba o resultado na forma de parágrafo, formatando a resposta em cores conforme a classificação IMC.
        Exiba o resultado como informação atrativa em formato texto!
    -->
    <?php
        // Fonte: https://pt.wikipedia.org/wiki/%C3%8Dndice_de_massa_corporal

        $cor1 = "#0FC2C0";
        $cor2 = "#0CABA8";
        $cor3 = "#267365";
        $cor4 = "#F2CB05";
        $cor5 = "#F29F05";
        $cor6 = "#F28705";
        $cor7 = "#F23030";

        $tabela = "
            <table border = 1>
                <tr style=\"color: white; background-color: black; \">
                    <th>Resultado</th>
                    <th>Situação</th>
                </tr>
                <tr style=\"background-color: $cor1; \">
                    <td>Abaixo de 17</td>
                    <td>Muito abaixo do peso</td>
                </tr>
                <tr style=\"background-color: $cor2; \">
                    <td>Entre 17 e 18,49</td>
                    <td>Abaixo do peso</td>
                </tr>
                <tr style=\"background-color: $cor3; \">
                    <td>Entre 18,50 e 24,99</td>
                    <td>Peso normal</td>
                </tr>
                <tr style=\"background-color: $cor4; \">
                    <td>Entre 25 e 29,99</td>
                    <td>Acima do peso</td>
                </tr>
                <tr style=\"background-color: $cor5; \">
                    <td>Entre 30 e 34,99</td>
                    <td>Obesidade I</td>
                </tr>
                <tr style=\"background-color: $cor6; \">
                    <td>Entre 35 e 39,99</td>
                    <td>Obesidade II (severa)</td>
                </tr>
                <tr style=\"background-color: $cor7; \">
                    <td>Acima de 40</td>
                    <td>Obesidade III (mórbida)</td>
                </tr>
            </table>
        ";
        echo $tabela;

        // Entradas
        $altura = 1.80; // metros
        $peso   = 79;   // quilos

        // Processar
        $IMC = $peso / ($altura * $altura);

        $cor = "#FF0000";
        $resultado = "Indefinido";

        if ($IMC < 17) {
            $resultado = "Muito abaixo do peso";
            $cor = $cor1;
        }
        if ($IMC >= 17 && $IMC <= 18.49) {
            $resultado = "Abaixo do peso";
            $cor = $cor2;
        }
        if ($IMC >= 18.50 && $IMC <= 24.99) {
            $resultado = "Peso normal";
            $cor = $cor3;
        }
        if ($IMC >= 25 && $IMC <= 24.99) {
            $resultado = "Acima do peso";
            $cor = $cor4;
        }
        if ($IMC >= 30 && $IMC <= 34.99) {
            $resultado = "Obesidade I";
            $cor = $cor5;
        }
        if ($IMC >= 35 && $IMC <= 39.99) {
            $resultado = "Obesidade II (severa)";
            $cor = $cor6;
        }
        if ($IMC > 40) {
            $resultado = "Obesidade III (mórbida)";
            $cor = $cor7;
        }                                              

        // Exibir
        echo "<p><b>Índice de Massa Corporal: $IMC </b> ( <span style=\"color: $cor; \">$resultado</span> )</p>";
    ?>

    <hr>

    <!--
    11.
        Declare as variáveis Escolha, Resultado.
        Construa uma estrutura de escolha de opção para responder conforme o tipo de erro do servidor (mensagem).
        Crie situações teste. Pesquise os principais tipos de códigos de erro HTTP e utilize pelo menos cinco tipos.
        Exiba o resultado neste HTML.
    -->
    <?php
        // Entrada
        $escolha = 404;
        $resultado = "Indefinido";

        // Processar
        switch ($escolha) {
            case 403:
                $resultado = "Proibido (Forbidden)";
                break;
            case 404:
                $resultado = "Não encontrado (Not Found)";
                break;
            case 500:
                $resultado = "Erro interno do servidor (Internal Server Error)";
                break;
            case 502:
                $resultado = "Serviço Indisponível (Bad Gateway)";
                break;                
            case 503:
                $resultado = "Serviço Indisponível (Service Unavailable)";
                break;
            case 504:
                $resultado = "Tempo limite de resoista esgotado (Gateway Timeout)";
                break;                                                                
            default:
                $resultado = "Indefinido (Undefined)";
                break;
        }

        // Exibir
        echo "<p>Erro $escolha : $resultado </p>";

    ?>

    <hr>
    <h1>Atividade Conversão de Tipos</h1>
    <hr>  
    
    <!--
    12.
        Declare as variáveis ValorInteiro, ValorFracionado, ValorTexto, ValorLogico, Resultado.
        Atribua valores correspondentes ao nome da variável.
        Atribua ao Resultado valores convertidos e exiba.
        Faça isso para todas as possibilidades: Inteiro pra Fração, Fração pra Texto, etc.
    -->
    <?php
        // Entradas
        $ValorInteiro    = 10;
        $ValorFracionado = 10.5;
        $ValorTexto      = "10.1";
        $ValorLogico     = true;

        // Processar e Exibir
        $tipo = "Inteiro";
        $valor = $ValorInteiro;
        $Resultado  = "Valor $tipo ($valor) = Fração  (" . floatval($valor) . ")\n";
        $Resultado .= "Valor $tipo ($valor) = Texto   (" . strval($valor) . ")\n";
        $Resultado .= "Valor $tipo ($valor) = Lógico  (" . boolval($valor) . ")\n";
        echo "<pre>$Resultado</pre>";
        
        $tipo = "Fração";
        $valor = $ValorFracionado;
        $Resultado  = "Valor $tipo ($valor) = Inteiro (" . intval($valor) . ")\n";
        $Resultado .= "Valor $tipo ($valor) = Texto   (" . strval($valor) . ")\n";
        $Resultado .= "Valor $tipo ($valor) = Lógico  (" . boolval($valor) . ")\n";
        echo "<pre>$Resultado</pre>";

        $tipo = "Texto";
        $valor = $ValorTexto;
        $Resultado  = "Valor $tipo ($valor) = Inteiro (" . intval($valor) . ")\n";
        $Resultado .= "Valor $tipo ($valor) = Fração  (" . floatval($valor) . ")\n";
        $Resultado .= "Valor $tipo ($valor) = Lógico  (" . boolval($valor) . ")\n";
        echo "<pre>$Resultado</pre>"; 

        $tipo = "Lógico";
        $valor = $ValorLogico;
        $Resultado  = "Valor $tipo ($valor) = Inteiro (" . intval($valor) . ")\n";
        $Resultado .= "Valor $tipo ($valor) = Fração  (" . floatval($valor) . ")\n";
        $Resultado .= "Valor $tipo ($valor) = Texto   (" . strval($valor) . ")\n";
        echo "<pre>$Resultado</pre>"; 
         
    ?>    

</body>

</html>