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
    <title>PHP :: Banco de Dados</title>
</head>

<body>

    <h1>Atividade de Banco de Dados</h1>
    <hr>

    <?php

        /*
            ETAPA 01 - 24/06/20224
        */

        // Incluir configuração do Banco de Dados.

        // Conectar com o BD usando PDO (PHP Data Objects).

        // Inserir dados na Tabela "products".

        // Listar todos os dados inseridos.


        /*
            ETAPA 02 - 25/06/2024
        */

        // Atualizar dado.

        // Deletar dado.

        // Pesquisar dados.

        
        echo "PHP Finalizado!";
    ?>

</body>

</html>