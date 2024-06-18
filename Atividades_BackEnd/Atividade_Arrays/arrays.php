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

    <h1>Atividade de Estrutura de Dados</h1>
    <hr>

    <h2>Vetor (Array Unidimensional)</h2>

    <hr>

    <!--
    1.
        Construa um Vetor contendo as palavras: vermelho, amarelo, azul, verde, laranja, roxo, ciano, branco, preto.
        Utilize o comando For para percorrer e exibir em uma lista desordenada das palavras.
        Exiba o resultado neste HTML!
    -->
    <?php
        // Escreva aqui o código.
    ?>

    <!--
    2.
        Construa um Vetor Indexado contendo as palavras como índices: Blue, Navy, Turquoise, Aquamarine, Green, ForestGreen,
            Chocolate, Indigo, Orchid, Red, Gold, Yellow.
        Pesquise a tabela de cores HTML e para cada índice associe um código hexadecimal. Por exemplo, Blue é #0000FF.
        Utilize o comando For para percorrer e exibir o nome da cor e o código em uma Tabela HTML.
        Aproveite os códigos hexadecimais e o CSS para colorir as células.
        Exiba o resultado neste HTML!
    -->
    <?php
        // Escreva aqui o código.
    ?>

    <!--
    3.
        Construa um Vetor contendo o nome dos seus colegas de turma de forma desordenada.
        Utilize o comando Foreach para percorrer e exibir os nomes cada um em um parágrafo.
        Use a função de ordenação de arrays do PHP e repita o comando Foreach para exibir os nomes novamente.
        Exiba o resultado neste HTML!
    -->
    <?php
        // Escreva aqui o código.
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
        // Escreva aqui o código.
    ?>

    <hr>

    <!--
    5.
      Aproveite o código nº 4, duplicando e substituindo "Vitória", "Empate" ou "Derrota" por símbolos HTML divertidos.   
    -->
    <?php
        // Escreva aqui o código.
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
        // Escreva aqui o código.
    ?>

    <hr>

    <!--
    7.
        Pesquise os principais itens de um Carrinho de Compras de um E-commerce (Shopping cart).
        Construa uma Matriz Indexada (Array bidimensional indexado) contendo estes itens (dados),
        utilizando pelo menos 05 linhas de conteúdo preenchidas com exemplos.
        Utilize as estruturas de repetição para percorrer os dados e exibir em uma Tabela HTML.
        Utilize preferencialmente o acesso usando a nomenclatura dos índices.
    -->
    <?php
        // Escreva aqui o código.
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

        // Escreva aqui o código.
    ?>

</body>

</html>