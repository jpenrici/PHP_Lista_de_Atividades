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
function insert($pdo, $table, $data) 
{
    $sql    = "INSERT INTO `" . $table . "` ( ";
    $names  = "";
    $values = "";
    $limit  = count($data[0]);
    for ($i = 0; $i < $limit; $i++) {
        $names  .= "`" . $data[0][$i] . "`";
        $values .= "'" . $data[1][$i] . "'";
        if ($i < $limit - 1) {
            $names  .= ",";
            $values .= ",";
        }
    }
    $sql .= $names . " ) VALUES ( " . $values . " );";
    $result = command($pdo, $sql);

    return !is_null($result);
}

// Função Atualizar por Identificador (chave primária)
function update($pdo, $table, $name, $value, $primaryKey, $key)
{
    $sql = "UPDATE `" . $table . "` SET `" . $name . "` = '" . $value . "' WHERE `" . $primaryKey . "` = '" . $key . "';";
    $result = command($pdo, $sql);

    return !is_null($result);
}

// Função Listar Todos
function list_all_itens($pdo, $table)
{
    $sql = "SELECT * FROM `" . $table . "`;";
    $result = command($pdo, $sql);

    return $result;
}

// Função Listar por Identificador (chave primária)
function list_by_id($pdo, $table, $primaryKey, $value)
{
    return find_by_key($pdo, $table, $primaryKey, $value);
}

// Função Pesquisar por palavra-chave
function find_by_key($pdo, $table, $name, $value)
{
    $result = null;
    $sql = "SELECT * FROM `" . $table . "` WHERE `" . $name . "` = '" . $value . "';";
    $result = command($pdo, $sql);
    if ($result) {
        $count = $result->rowCount();
        if ($count != 1) {
            return null;
        }
    }

    return $result;
}

// Função Deletar por Identificador (chave primária)
function delete_by_id($pdo, $table, $primaryKey, $value)
{
    $sql = "DELETE FROM `" . $table . "` WHERE `" . $primaryKey . "`='" . $value . "';";
    $result = command($pdo, $sql);

    return !is_null($result);
}

// Função extra : Html Table SQL
function table($names, $data) {
    $html  = "<table border = '1'>";
    for ($i = 0; $i < count($names); $i++) {
        $html .= "<th>" . $names[$i] . "</th>";
    }
    // PDO::FETCH_ASSOC: retorna um array indexado pelo nome da coluna como retornada no resultado.
    // fetch()         : método de busca.
    while($row = $data->fetch(PDO::FETCH_ASSOC)) {
        $html .= "<tr>";
        for ($i = 0; $i < count($names); $i++) {
            $html .= "<td>" . $row[$names[$i]] . "</td>";
        }
        $html .= "</tr>";
    }
    $html .= "</table>";

    return $html;
}

// Função extra : Html Table
function table2($data) {
    $html = "";
    if (is_array($data)) {
        $html = "<table border = '1'>";
        foreach ($data as $item) {
            $html .= "<tr>";
            if (is_array($item)) {
                foreach ($item as $subitem) {
                    $html .= "<td>" . $subitem. "</td>";
                }
            } else {
                $html .= "<td>" . $item . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
    } 

    return $html;
}

// tools.php