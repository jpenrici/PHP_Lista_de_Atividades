<!--
        Atividade - Banco de Dados
        Ferramenta Auxiliar

        Para está atividade é necessário um ambiente de Localhost.

        Fontes úteis:
            https://www.php.net/docs.php
            https://www.w3schools.com/php/default.asp

            https://www.php.net/manual/pt_BR/book.pdo.php
            https://www.php.net/manual/pt_BR/pdo.exec.php
            https://www.php.net/manual/pt_BR/pdo.query.php
            https://www.php.net/manual/pt_BR/pdostatement.fetch.php
-->
<?php

// Função Conectar
function connect($hostname, $dbname, $user, $password)
{
    try {
        $pdo = new PDO("mysql:host=" . $hostname . ";dbname=" . $dbname, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    return null;
}

// Função Comando SQL
function command($pdo, $sql)
{
    try {
        return $pdo->query($sql);
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    return null;
}

// Função Inserir
function insert($hostname, $dbname, $user, $password, $table, $data) 
{
    $limit = count($data[0]);
    $sql = "INSERT INTO `product` (";
    $names = "";
    $values = "";
    for ($i = 0; $i < $limit; $i++) {
        $names .= "`" . $data[0][$i] . "`";
        $values .= "'" . $data[1][$i] . "'";
        if ($i < $limit) {
            $names .= ",";
            $values .= ",";
        }
    }
    $sql .= $names . ") VALUES (" . $values . ");";

    $result = null;
    $pdo = connect($hostname, $dbname, $user, $password);
    $result = command($pdo, $sql);
    $pdo = null;

    return !is_null($result);
}

// Função Listar Todos
function list_all_itens($hostname, $dbname, $user, $password, $table)
{
    $result = null;
    $pdo = connect($hostname, $dbname, $user, $password);
    $sql = "SELECT * FROM `" . $table . "`;";
    $result = command($pdo, $sql);
    $pdo = null;

    return $result;
}

// Função Listar por Identificador
function list_by_id($hostname, $dbname, $user, $password, $table)
{
    $result = null;
    $pdo = connect($hostname, $dbname, $user, $password);
    $sql = "SELECT `id` FROM `" . $table . "` WHERE `id` = '" . $id . "';";
    $result = command($pdo, $sql);
    if ($result) {
        $count = $result->rowCount();
        if ($count != 1) {
            echo "Encontrados " . $count . " registros para o ID " . $id . "!" . PHP_EOL;
            return false;
        }
    }
    $pdo = null;

    return $result;
}

// Função Pesquisar por palavra-chave
function find_by_key($pdo, $table, $name, $key)
{
    $result = null;
    $sql = "SELECT * FROM `" . $table . "` WHERE `" . $name . "` = '" . $key . "';";
    $result = command($pdo, $sql);
    if ($result) {
        $count = $result->rowCount();
        if ($count != 1) {
            echo "Encontrados na tabela " . $table . ", " . $count . " registros para a coluna " . $key . "!" . PHP_EOL;
            return null;
        }
    }

    return $result;
}

// Função Deletar por Identificador
function delete_by_id($hostname, $dbname, $user, $password, $table, $id)
{
    $result = null;
    $pdo = connect($hostname, $dbname, $user, $password);
    // Checar se existe ID.
    $sql = "SELECT `id` FROM `" . $table . "` WHERE `id` = '" . $id . "';";
    $result = command($pdo, $sql);
    if ($result) {
        $count = $result->rowCount();
        if ($count != 1) {
            echo "Encontrados " . $count . " registros para o ID " . $id . "!" . PHP_EOL;
            return false;
        }

        // Deletar.
        $sql = "DELETE FROM `" . $table . "` WHERE `" . $table . "`.`id` = '" . $id . "';";
        $result = command($pdo, $sql);
    }
    $pdo = null;

    return !is_null($result);
}

// tools.php