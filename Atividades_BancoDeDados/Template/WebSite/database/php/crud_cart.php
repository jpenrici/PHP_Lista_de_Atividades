<?php

require_once 'db_functions.php';
require_once 'crud_product.php';

function create_cart($database, $quantity, $user_id, $product_id)
{
    $result = null;

    // Checar entradas.
    if (is_null_or_empty($database)) {
        return false;
    }

    if (is_null_or_empty([$quantity, $user_id, $product_id])) {
        return false;
    }

    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

    // Procucar e Checar.
    if (is_null(find_by_id($pdo, 'user', $user_id))) {
        return false;
    }

    $free = current_quantity($pdo, $product_id, $quantity);
    if ($free < 1) {
        return false;
    }

    // Criar.
    $sql = "INSERT INTO `shopping_cart` (`id`, `quantity`, `createdAt`, `updatedAt`, `user_id`, `product_id`) ";
    $sql .= "VALUES (NULL, '" . $quantity . "', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, '" . $user_id . "', '" . $product_id . "');";
    $result = command($pdo, $sql);

    // Atualizar.
    update_product_quantity_by_id($database, $product_id, $free);   // Teste.

    // Desconectar.
    $pdo = null;

    return !is_null($result);
}

function read_cart_by_id($database, $id)
{
    // Checar entradas.
    if (is_null_or_empty($database)) {
        return null;
    }

    if (is_null_or_empty($id)) {
        return null;
    }

    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);
    
    return find_by_id($pdo, 'shopping_cart', $id);
}

function read_cart_by_userID($database, $user_id)
{
    // Checar entradas.
    if (is_null_or_empty($database)) {
        return null;
    }

    if (is_null_or_empty($user_id)) {
        return null;
    }
    
    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);
    
    $sql = "SELECT * FROM `shopping_cart` WHERE `user_id` = $user_id";
    $result = command($pdo, $sql);
    
    // Desconectar.
    $pdo = null;
    
    return $result;
}

function update_cart_by_id($database, $id, $quantity, $user_id, $product_id)
{
    return null;
}

function delete_cart_by_id($database, $id)
{
    // Conectar.
    $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);
    
    // Procurar.
    $result = delete_by_id($pdo, 'shopping_cart', 'id', $id);

    // Desconectar.
    $pdo = null;

    return !$result;
}

function list_all_carts($database)
{
   // Conectar.
   $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);

   // Procurar.
   $result = list_all_itens($pdo, 'shopping_cart');
   
   // Desconectar.
   $pdo = null;
   
   return $result;
}

// crud_cart.php