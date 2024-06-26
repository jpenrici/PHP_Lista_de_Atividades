<!--
        Atividade - Banco de Dados

        Etapas:
                1) Abra o phpMyAdmin
                2) Crie um usuário 'admin'
                3) Crie um Banco de Dados com o nome "ecommerce_db"
                4) Crie uma Tabela com o SQL:
                
                    CREATE TABLE `product` (
                        `id` int NOT NULL,
                        `name` varchar(100) NOT NULL,
                        `description` text,
                        `price` decimal(6,0) NOT NULL,
                        `discount` int(5) DEFAULT '0',
                        `quantity` int NOT NULL,
                        `image` varchar(100) NOT NULL,
                        `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                        `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
                        `category_id` int NOT NULL
                    )

                Obs:
                    Para testes iniciais:
                        product : sem primary key.
                        id      : sem auto incremento.

                5) Utilizar o arquivo db_tools.php

        Para está atividade é necessário um ambiente de Localhost.

        Fontes úteis:
            https://www.php.net/docs.php
            https://www.w3schools.com/php/default.asp

            https://www.php.net/manual/pt_BR/book.pdo.php
            https://www.php.net/manual/pt_BR/pdo.exec.php
            https://www.php.net/manual/pt_BR/pdo.query.php
            https://www.php.net/manual/pt_BR/pdostatement.fetch.php
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP :: Banco de Dados</title>
</head>

<body>

    <h1>Atividade de Banco de Dados</h1>
    <hr>

    <?php

        /*
            Nova Solução
        */
        require "./scripts/db_tools.php";
        require "./config/config.php";

        // Conectar com o BD usando PDO (PHP Data Objects).
        // $pdo = connect($hostname, $dbname, $user, $password);
        // if ($pdo) {
        //     echo "Conexão bem sucedida!<br>";
        // } 

        // Inserir dados na Tabela "products".
        
        // Campos
        $name        = "Produto 1";
        $description = "Descrição do produto 1";
        $price       = 19.90;
        $discount    = 5;
        $quantity    = 10;
        $image       = "https://www.php.net/images/logos/new-php-logo.svg";
        $category_id = "1";

        for ($id = 1; $id < 5; $id++) {
            $data = [
                ["id", "name", "description", "price", "discount", "quantity", "image", "createdAt", "updatedA", "category_id"],
                [$id, $name, $description, $price, $discount, $quantity, $image, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, $category_id]
            ];
            if (insert($hostname, $dbname, $user, $password, $table, $data)) {
                echo "Novo dado inserido!<br>";
            }
        }

        // Listar todos os dados inseridos.
        $result = list_all_itens($hostname, $dbname, $user, $password, 'product');
        if ($result) {
            // Preparar exibição.
            $total = $result->rowCount();   // rowCount(): método retorna quantidade de linhas.
            $htmlTable  = "<table border = '1'>";
            $htmlTable .= "<th>id</th><th>name</th><th>description</th><th>price</th><th>discount</th>
                           <th>quantity</th><th>image</th><th>createdAt</th><th>updatedAt</th><th>category_id</th>";
            // PDO::FETCH_ASSOC: retorna um array indexado pelo nome da coluna como retornada no resultado.
            // fetch()         : método de busca.
            while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $htmlTable .= "<tr>";
                $htmlTable .= "<td>" . $row['id']              . "</td>";
                $htmlTable .= "<td>" . $row['name']            . "</td>";
                $htmlTable .= "<td>" . $row['description']     . "</td>";
                $htmlTable .= "<td>" . $row['price']           . "</td>";
                $htmlTable .= "<td>" . $row['discount']        . "</td>";
                $htmlTable .= "<td>" . $row['quantity']        . "</td>";
                $htmlTable .= "<td><img src='" . $row['image'] . "' width='24px'></td>";
                $htmlTable .= "<td>" . $row['createdAt']       . "</td>";
                $htmlTable .= "<td>" . $row['updatedAt']       . "</td>";
                $htmlTable .= "<td>" . $row['category_id']     . "</td>";
                $htmlTable .= "</tr>";
            }
            $htmlTable .= "</table>";

            // Exibir
            echo "<p>Encontrados $total itens na Tabela 'product'.</p>";
            echo $htmlTable;
        }

        // Atualizar dado.
        $sql = "UPDATE `product` SET `updatedAt`= CURRENT_TIMESTAMP WHERE `id` = '1';";
        if (command($pdo, $sql)) {
            echo "Novo dado atualizado!<br>";
        }

        // Deletar dados.
        for ($i = 1; $i < 5; $i++) {
            if (delete_by_id($hostname, $dbname, $user, $password, 'product', $i)) {
                echo "Dado deletado!<br>";
            }
        }

        // Pesquisar dados.

        // Desconectar o Banco de Dados.
        $pdo = null;
        
        // Mensagem final de teste.
        echo "<p>PHP Finalizado!</p>";
    ?>

</body>

</html>