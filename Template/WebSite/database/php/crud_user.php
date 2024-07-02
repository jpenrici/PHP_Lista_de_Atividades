<?php

require_once 'db_functions.php';

function create_user($database, $username, $email, $password1, $password2)
{
    $result = null;

    // Checar entradas.
    if (is_null_or_empty($database)) {
        return false;
    }

    if (is_null_or_empty([$username, $email, $password1, $password2])) {
        return false;
    }

    if ($password1 != $password2) {
        return false;
    }

    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

    // Procurar.
    $sql = "SELECT * FROM `user` WHERE BINARY `username` = '" . $username . "';";
    $result = command($pdo, $sql);
    if ($result) {
        $count = $result->rowCount();
        if ($count > 0) {
            // echo "Encontrado " . $count . " registros para " . $username . "! Novo registro não será criado!" . PHP_EOL;
            return false;
        }
    }

    // Criar.
    $sql = "INSERT INTO `user` (`id`, `username`, `email`, `password`, `administrator`, `createdAt`, `updatedAt`) ";
    $sql .= "VALUES (NULL, '" . $username . "', '" . $email . "', '" . $password1 . "', '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
    $result = command($pdo, $sql);

    // Desconectar.
    $pdo = null;

    return !is_null($result);
}

function read_user_by_username($database, $username)
{
    $result = null;

    // Checar entradas.
    if (is_null_or_empty($database)) {
        return null;
    }

    if (is_null_or_empty($username)) {
        return null;
    }

    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

    // Procurar.
    $sql = "SELECT * FROM `user` WHERE BINARY `username` = '" . $username . "';";
    $result = command($pdo, $sql);

    // Desconectar.
    $pdo = null;

    return $result;
}

function update_user_by_id($database, $id, $username, $email, $password)
{
    $result = null;

    // Checar entradas.
    if (is_null_or_empty($database)) {
        return false;
    }

    if (is_null_or_empty($id)) {
        return false;
    }

    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

    // Procurar.
    $result = find_by_id($pdo, 'user', $id);
    if ($result) {
        // Atualizar.
        $data = $result->fetch(PDO::FETCH_ASSOC);
        $new_username = (empty($username) || is_null($username)) ? $data['username'] : $username;
        $new_email = (empty($email) || is_null($email)) ? $data['email'] : $email;
        $new_password = (empty($password) || is_null($password)) ? $data['password'] : $password;
        $updateAt = date("Y-m-d H:i:s");
        // echo "Valores: " . $id . ", " . $new_username . ", " . $new_email . ", " . $new_password . ", " . $updateAt . PHP_EOL;

        $sql = "UPDATE `user` SET `username` = '" . $new_username . "', `email` = '" . $new_email . "', ";
        $sql .= "`password` = '" . $new_password . "', `updatedAt` = '" . $updateAt . "' WHERE `user`.`id` = " . $id . ";";
        $result = command($pdo, $sql);
    }

    // Desconectar.
    $pdo = null;

    return !is_null($result);
}

function delete_user_by_id($database, $id)
{
   // Conectar.
   $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);
    
   // Procurar.
   $result = delete_by_id($pdo, 'user', 'id', $id);

   // Desconectar.
   $pdo = null;

   return !$result;
}

function list_all_users($database)
{
   // Conectar.
   $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

   // Procurar.
   $result = list_all_itens($pdo, 'user');
   
   // Desconectar.
   $pdo = null;
   
   return $result;
}

// crud_user.php