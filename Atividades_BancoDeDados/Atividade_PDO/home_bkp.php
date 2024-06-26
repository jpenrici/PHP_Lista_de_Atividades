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
            ETAPA 01
        */

        // Incluir configuração do Banco de Dados.
        require "./config/config.php";
        // var_dump($database);

        // Conectar com o BD usando PDO (PHP Data Objects).
        try {
            $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão bem sucedida!<br>";
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }

        // Inserir dados na Tabela "products".
        
        // Campos
        $id          = 1;
        $name        = "Produto 1";
        $description = "Descrição do produto 1";
        $price       = 19.90;
        $discount    = 5;
        $quantity    = 10;
        $image       = "https://www.php.net/images/logos/new-php-logo.svg";
        $category_id = "1";    

        try {
            // SQL
            $sql = "INSERT INTO `product` (`id`, `name`, `description`, `price`, `discount`, `quantity`, `image`, `createdAt`, `updatedAt`, `category_id`) ";
            $sql .= "VALUES ('" . $id . "', '" . $name . "', '" . $description . "', '" . $price . "', '" . $discount . "', '" . $quantity . "', '" . $image;
            $sql .= "', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '" . $category_id . "');";
            
            // echo $sql;

            // Executando o comando SQL uma vez.
            $pdo->exec($sql); // Executa uma instrução SQL, retornando o número de linhas afetadas pela instrução.
            echo "Novo dado inserido!<br>";
            // Executando o mesmo comando SQL, várias vezes. Atenção ao usar loops!
            for ($i = 0; $i < 4; $i++) {
                $pdo->exec($sql);
                echo "Novo dado inserido!<br>";
            }
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
        
        // Listar todos os dados inseridos.

        try {
            // SQL
            $sql = "SELECT * FROM `product`;";
            // Consulta
            $result = $pdo->query($sql);   // Prepara e executa uma instrução SQL em uma única chamada de função, retornando um objeto PDOStatement.
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
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }

        /*
            ETAPA 02
        */

        // Atualizar dado.

        try {
            // SQL
            $sql = "UPDATE `product` SET `updatedAt`= CURRENT_TIMESTAMP WHERE `id` = '1';";
            // Executando o comando SQL uma vez.
            $pdo->exec($sql); // Executa uma instrução SQL, retornando o número de linhas afetadas pela instrução.
            echo "Novo dado atualizado!<br>";
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }

        // Deletar dado.
        try {
            // SQL
            $sql = "DELETE FROM `product` WHERE `id`='1';";
            $result = $pdo->exec($sql);
            echo "$result registros deletados.<br>";
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }

        // Pesquisar dados.
        
        try {
            // SQL
            $sql = "SELECT * FROM `product` WHERE `id`='1';";
            // Consulta
            $result = $pdo->query($sql);   
            // Preparar exibição.
            $total = $result->rowCount();   // rowCount(): método retorna quantidade de linhas.
            // Exibir
            echo "<p>Encontrados $total itens na Tabela 'product'.</p>";
        } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }

        // Desconectar o Banco de Dados.
        $pdo = null;
        
        // Mensagem final de teste.
        echo "<p>PHP Finalizado!</p>";
    ?>

</body>

</html>