<!--
        Atividade Formulários, Métodos GET e POST e Banco de Dados.

        Obs.:

            Para esta atividade não será feito nenhum código de validação ou criptografia
            de senha, apenas o teste de comunicação com o BD após envio dos dados do Form.

        Etapas:
                1) Abra o phpMyAdmin.
                2) Crie um usuário 'admin', se não estiver disponível.
                3) Crie um Banco de Dados com o nome "ecommerce_db", se não estiver disponível.
                4) Crie uma Tabela com o SQL:
                
                    CREATE TABLE `user` (
                        `id` int NOT NULL AUTO_INCREMENT,
                        `user` varchar(100) NOT NULL,
                        `password` varchar(100) NOT NULL,
                        PRIMARY KEY (`id`)
                    )
                
                5) Crie um usuário teste com o SQL:

                    INSERT INTO `user` (`id`, `user`, `password`)
                        VALUES (NULL, 'fulano', 'fulano');

        Para está atividade é necessário um ambiente de Localhost.

        Fontes úteis:
            https://www.php.net/docs.php
            https://www.w3schools.com/php/default.asp

            https://www.php.net/manual/pt_BR/book.pdo.php
            https://www.php.net/manual/pt_BR/pdo.exec.php
            https://www.php.net/manual/pt_BR/pdo.query.php
            https://www.php.net/manual/pt_BR/pdostatement.fetch.php
            https://www.php.net/manual/pt_BR/reserved.variables.php
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade de BackEnd</title>
</head>

<body>

    <h1>Respostas</h1>
    <hr>

    <?php
        // $_SERVER: Variável pré-definida do PHP que fornece informações do servidor e ambiente em execução.
        // Fonte: https://www.php.net/manual/pt_BR/reserved.variables.server.php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Capturando os dados vindos do Form ("home.html").
            $userLogin     = $_POST['user'];
            $passwordLogin = $_POST['password'];

            // Configuração para conexão o BD.
            $hostname = "localhost";
            $dbname   = "ecommerce_db";
            $user     = "admin";    // Usuário deve estar cadastrado no SGBD.
            $password = "admin";

            try {
                $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Conexão bem sucedida!<br>";
            } catch(PDOException $e) {
                // Fonte: https://www.php.net/manual/pt_BR/class.pdoexception.php
                echo "Erro: " . $e->getMessage();
            }

            // Consulta : Query
            // Obtido no PhpMyAdmin: SELECT * FROM `user` WHERE `user` LIKE 'fulano' AND `password` LIKE 'fulano'
            $sql = "SELECT * FROM `user` WHERE `user` LIKE '" . $userLogin . "' AND `password` LIKE '" . $passwordLogin . "' ;";
            $result = $pdo->query($sql);
            // Checar se encontrado pelo menos uma confirmação de usuário e senha.
            if ($result->rowCount() > 0) {
                echo "Encontrado! Permitir acesso!";
                echo "<h4>Usuário: $userLogin</h4>";
                echo "<h4>Senha: $passwordLogin</h4>";
            } else {
                echo "Usuário não encontrado!<br>";
                echo "<a href='home.html'>Tente novamente!</a>";
            }

            // Desconectar o BD.
            $pdo = null;

        }
    ?>
    
</body>

</html>