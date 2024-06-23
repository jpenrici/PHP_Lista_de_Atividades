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

    <h1>Atividade de Estrutura de Dados</h1>
    <hr>

    <h2>Vetor (Array Unidimensional)</h2>

    <hr>

    <!--
    1.
        Construa um Vetor contendo as palavras: vermelho, amarelo, azul, verde, laranja, roxo, ciano, branco, preto.
        Utilize o comando For para percorrer e exibir em uma lista desordenada com as palavras.
        Exiba o resultado neste HTML!
    -->
    <?php
        $vetor = ["vermelho", "amarelo", "azul", "verde", "laranja", "roxo", "ciano", "branco", "preto"];
        $resultado = "<ul>";
        for ($i = 0; $i < count($vetor); $i++) {
            $resultado .= "<li>" . $vetor[$i] . "</li>";
        }
        $resultado .= "</ul>";
        echo $resultado;
    ?>

    <hr>

    <!--
    2.
        Construa um Vetor Indexado contendo as palavras: Blue, Navy, Turquoise, Aquamarine, Green, ForestGreen,
            Chocolate, Indigo, Orchid, Red, Gold, Yellow.
        Pesquise a tabela de cores HTML e para cada índice associe um código hexadecimal. Por exemplo, Blue é #0000FF.
        Utilize o comando For para percorrer e exibir o nome da cor e o código em uma Tabela HTML.
        Aproveite os códigos hexadecimais e o CSS para colorir as células.
        Exiba o resultado neste HTML!
    -->
    <?php
        $vetorIndexado = [
            10 => "Blue",
            11 => "Navy",
            12 => "Turquoise",
            13 => "Aquamarine",
            14 => "Green",
            15 => "ForestGreen",
            16 => "Chocolate",
            17 => "Indigo", "Orchid",
            18 => "Red",
            19 => "Gold",
            20 => "Yellow"
        ];
        $vetorAssociativo = [
            "Blue" => "#0000FF",
            "Navy" => "#000080",
            "Turquoise" => "#40E0D0",
            "Aquamarine" => "#7FFFD4",
            "Green" => "#008000",
            "ForestGreen" => "#228B22",
            "Chocolate" => "#D2691E",
            "Indigo" => "#4B0082",
            "Orchid" => "#DA70D6",
            "Red" => "#FF0000",
            "Gold" => "#FFD700",
            "Yellow" => "#FFFF00"
        ];

        // var_dump : função para detalhar uma variável.
        // var_dump($vetorIndexado); 
        // var_dump($vetorAssociativo);

        $resultado = "<table border = '1'>";
        for ($i = 10; $i <= 20; $i++) {
            $palavraChave = $vetorIndexado[$i];
            $valor  = $vetorAssociativo[$palavraChave];
            $estilo = "style=\"background-color: $valor;\"";
            $resultado .= "<tr $estilo><td>" . $palavraChave . "</td><td>" . $valor . "</td></tr>";
        }
        $resultado .= "</table>";

        // Exibir
        echo $resultado;        
    ?>

    <hr>

    <!--
    3.
        Construa um Vetor contendo o nome dos seus colegas de turma de forma desordenada.
        Utilize o comando Foreach para percorrer e exibir os nomes cada um em um parágrafo.
        Use a função de ordenação de arrays do PHP e repita o comando Foreach para exibir os nomes novamente.
        Exiba o resultado neste HTML!
    -->
    <?php
        // Entrada
        $vetor = ["nome_1", "nome_3", "nome_0", "nome_4", "nome_2"];

        // Exibir
        echo "<h4>Desordenado</h4>";
        foreach ($vetor as $nome) {
            echo "<p style='margin: 0;'> $nome </p>";
        }
        sort($vetor); // Função de ordenação.
        echo "<h4>Ordenado</h4>";
        foreach ($vetor as $nome) {
            echo "<p style='margin: 0;'> $nome </p>";
        }       
    ?>

    <hr>

    <h2>Matriz (Array Bidimensional)</h2>

    <hr>
    
    <!--
    4.
        Construa uma Matriz contendo os dados da Tabela de Futebol (Brasileirão 2024), pelo menos os 10 primeiros colocados.
        Pesquise e colete o "Nome do Clube", "Pontos", e sequência dos últimos 5 jogos sinalizando "Vitória", "Empate" ou "Derrota".
        Utilize o comando For para percorrer e exibir em um HTML Table contendo também a posição classificatória.
        Aproveite e estilize a sequências de jogos para ficarem na cor verde, azul e vermelho para "Vitória", "Empate" ou "Derrota",
        respectivamente.
        Exiba o resultado neste HTML!
    -->
    <?php
        // Entrada
        // Atualizado em 22/06/2024.
        $tabela = [
            ["Flamengo",      21, "V", "V", "V", "E", "V"],
            ["Botafogo",      20, "E", "V", "V", "V", "E"],
            ["Palmeiras",     20, "D", "V", "V", "V", "V"],
            ["Athletico-PR",  18, "V", "D", "V", "E", "E"],
            ["Bahia",         18, "V", "E", "V", "E", "D"],
            ["Cruzeiro",      17, "V", "D", "V", "E", "V"],
            ["São Paulo",     15, "V", "V", "E", "E", "D"],
            ["Bragantino",    14, "D", "V", "D", "V", "D"],
            ["Internacional", 14, "E", "V", "E", "D", "V"],
            ["Atlético-MG",   13, "E", "E", "V", "D", "D"]
        ];

        // Processar
        $estado = ["V" => "Vitória", "E" => "Empate", "D" => "Derrota"];
        $cor    = ["V" => "green",   "E" => "blue",   "D" => "red"];

        $resultado  = "<table>";
        $resultado .= "<tr><th></th><th>Clube</th><th>Pontos</th><th colspan = '5'>Últimos 5 Jogos</th></tr>";
        for ($i = 0; $i < count($tabela); $i++) {
            $classificacao = $i + 1;
            $clube = $tabela[$i][0];
            $pontos = $tabela[$i][1];
            $jogos = "";
            for ($j = 2; $j <= 6; $j++) {
                $jogos .= "<td style='color: " . $cor[$tabela[$i][$j]] . "'; >" . $estado[$tabela[$i][$j]] . "</td>";
            }
            $resultado .= "<tr><td><b>$classificacao</b></td><td>$clube</td><td>$pontos</td>" . $jogos . "</tr>";
        }
        $resultado .= "</table>";

        // Exibir
        echo $resultado;  
    ?>

    <hr>

    <!--
    5.
      Aproveite o código nº 4, duplicando e substituindo "Vitória", "Empate" ou "Derrota" por símbolos HTML divertidos.   
    -->
    <?php
        // Processar
        $simbolo = ["V" => "&#x2714;",   "E" => "-",   "D" => "&#x2718;"];

        $resultado  = "<table>";
        $resultado .= "<tr><th></th><th>Clube</th><th>Pontos</th><th colspan = '5'>Últimos 5 Jogos</th></tr>";
        for ($i = 0; $i < count($tabela); $i++) {
            $classificacao = $i + 1;
            $clube = $tabela[$i][0];
            $pontos = $tabela[$i][1];
            $jogos = "";
            for ($j = 2; $j <= 6; $j++) {
                $jogos .= "<td style='color: " . $cor[$tabela[$i][$j]] . "'; >" . $simbolo[$tabela[$i][$j]] . "</td>";
            }
        $resultado .= "<tr><td><b>$classificacao</b></td><td>$clube</td><td>$pontos</td>" . $jogos . "</tr>";
        }
        $resultado .= "</table>";
        
        // Exibir
        echo $resultado;
    ?>

    <hr>

    <!--
    6.
        Construa uma Matriz de Preços de Produtos, transforme em HTML table e exiba.
        Utilize estruturas de repetição para percorrer e construir a tabela.
        Exiba o resultado neste HTML!

        Tema: Petshop.

        Exemplo:
        +-----------------+--------------+-------------+-------------------+--------------------+
        | [] Comprar Todos| Produto      | Preço Atual | Preço Promocional | URL Imagem         | 
        +-----------------+--------------+-------------+-------------------+--------------------+
        | []              | item 1       | R$ 300,00   | R$ 239,99         | http://imagem1.png | 
        +-----------------+--------------+-------------+-------------------+--------------------+
        | []              | item 2       | R$  80,00   | R$ 39,99          | http://imagem2.png |
        +-----------------+--------------+-------------+-------------------+--------------------+
        | []              | ...          | ...         | ...               | ...                |
        +-----------------+--------------+-------------+-------------------+--------------------+   

    Obs.:
          A Matriz com os dados do Produto, Preço Unitário e URL da Imagem devem ser construidos manualmente.
          A imagem deve aparecer na renderização da página no navegador.
          Inclua pelo menos 08 produtos.
          Inclua o checkbox "[]" com ID e sem função de evento.
    -->
    <?php
        // Entrada
        $imageTeste = "https://www.w3.org/html/logo/badge/html5-badge-h-solo.png";

        $produtos = [
            // Nome, Preço, Desconto, URL
            ["Shampoo Hipoalérgico", 13.69,  10, $imageTeste],
            ["Talco Antisseptico"  , 11.99,   5, $imageTeste],
            ["Kit Peitoral"        , 25.0,   10, $imageTeste],
            ["Ração Cães"          , 150.00, 15, $imageTeste],
            ["Snak Crocante"       , 21.00,   5, $imageTeste],
            ["Biscoito Clássico"   , 29.00,   8, $imageTeste],
            ["Petisco Selection"   , 10.00,  10, $imageTeste],
            ["Brinquedo Gatos"     , 16.90,   8, $imageTeste]
        ];

        // Processar
        $checkbox = "<input type='checkbox' id='comprartodos' name='comprados'/><label for='comprados'>Comprar Todos</label>";

        $resultado  = "<table>";
        $resultado .= "<tr><th>$checkbox</th><th>Produto</th><th>Preço Atual</th><th>Preço Promocional</th><th>Imagem</th></tr>";

        for ($i = 0; $i < count($produtos); $i++) {
            $valorPromocional = $produtos[$i][1] - ($produtos[$i][1] * $produtos[$i][2] / 100);
            $checkbox = "<input type='checkbox' id=\"compra_$i\" name='comprados'/><label for='comprados'></label>";
            
            $resultado .= "<tr><td>$checkbox</td>";
            $resultado .= "<td>" . $produtos[$i][0] . "</td>";
            $resultado .= "<td> R$ " . $produtos[$i][1] . "</td>";
            $resultado .= "<td> R$ " . $valorPromocional . "</td>";
            $resultado .= "<td><img src='" . $produtos[$i][3] . "' width='32px'></td>";
            $resultado .= "</tr>";
        }
        $resultado .= "</table>";

        // Exibir
        echo $resultado;   
    ?>

    <hr>

    <!--
    7.
        Pesquise os principais itens de um Carrinho de Compras de um E-commerce (Shopping cart).
        Construa uma Matriz (Array bidimensional) contendo estes itens (dados),
        utilizando pelo menos 05 linhas de conteúdo preenchidas com exemplos.
        Utilize as estruturas de repetição para percorrer os dados e exibir em uma Tabela HTML.
        Utilize preferencialmente o acesso usando a nomenclatura dos índices.
    -->
    <?php
        // Entradas
        $carrinhoDeCompras = [
            ["codigo" => 1001, "nome" => "Skate",            "quantidade" => 4, "preco" => 280],
            ["codigo" => 1010, "nome" => "Bola de Futebol",  "quantidade" => 1, "preco" =>  50],
            ["codigo" => 1011, "nome" => "Bola de Basquete", "quantidade" => 1, "preco" =>  80],
            ["codigo" => 1012, "nome" => "Bola de Ping Pong","quantidade" => 1, "preco" =>   5],
            ["codigo" => 1012, "nome" => "Bola de Futsal",   "quantidade" => 2, "preco" =>  78]
        ];

        // Processar
        $resultado  = "<table>";
        $resultado .= "<tr><th>Produto</th><th>Preço Unitário (R$)</th><th>Quantidade</th><th>Total (R$)</th></tr>";

        for ($i = 0; $i < count($carrinhoDeCompras); $i++) {
            $valorFinal = $carrinhoDeCompras[$i]["quantidade"] * $carrinhoDeCompras[$i]["preco"];           
            $resultado .= "<td>" . $carrinhoDeCompras[$i]["nome"] . "</td>";
            $resultado .= "<td>" . $carrinhoDeCompras[$i]["preco"] . "</td>";
            $resultado .= "<td>" . $carrinhoDeCompras[$i]["quantidade"] . "</td>";
            $resultado .= "<td>" . $valorFinal . "</td>";
            $resultado .= "</tr>";
        }
        $resultado .= "</table>";

        // Exibir
        echo $resultado;  
    ?>

    <hr>

    <!--
    8.
        Dadas as estruturas de dados abaixo, construa uma solução para organizar a saída e exibir
        um relatório no formato de Tabela HTML.
        A solução deve prever falhas de dados inválidos, criar somatórios se necessário e
        consolidadar dados se necessário.
    -->
    <?php
        // Lista de Produtos
        $produtos = ["Pasta de Dente", "Macarrão", "Arroz", "Fubá", "Sabonete"];
        // Carrinho de Compras
        $relacaoEscolhida = [
            // [índice do produto, quantidade do produto]
            [1, 3], [4, 2], [0, 0], [1, 5], [2, 10], [10, 5], [4, 7], [-1, 5]
        ];

        // Ordenar
        $copia = $relacaoEscolhida;
        sort($copia);

        // Preparar
        $dados = array_fill(0, count($produtos), 0);
        foreach ($copia as $item) {
            // Checar índice do produto.
            if ($item[0] >= 0 && $item[0] < count($produtos)) {
                // Checar quantidade do produto.
                if ($item[1] > 0) {
                    $dados[$item[0]] += $item[1];
                }
            }
        }

        // Formatar
        $resultado  = "<table><tr><th>Produto</th><th>Quantidade</th></tr>";
        for ($i = 0; $i < count($dados); $i++) {
            // if ($dados[$i] < 1) { continue; }
            $resultado .= "<tr><td>" . $produtos[$i] . "</td><td>" . $dados[$i] . "</td></tr>";
        }
        $resultado .= "</table>";
             
        // Exibir
        echo $resultado;
    ?>

</body>

</html>