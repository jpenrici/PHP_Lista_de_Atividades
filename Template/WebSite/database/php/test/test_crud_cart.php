<?php

require_once "../../config/config.php";
require_once "../crud_cart.php";

// CRUD : crud_cart.php
// create_cart($database, $quantity, $user_id, $product_id)

$result = create_cart($database, '2', '1000', '1');
echo "Criar compra no carrinho ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = create_cart($database, '2', '3', '1');
echo "Criar compra no carrinho ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = create_cart($database, '50', '3', '1');
echo "Criar compra no carrinho ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = create_cart($database, '1000', '3', '1');
echo "Criar compra no carrinho ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = create_cart($database, '10', '2', '1');
echo "Criar compra no carrinho ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = create_cart($database, '100', '2', '1');
echo "Criar compra no carrinho ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = read_cart_by_id($database, '3');
if ($result) {
    echo "Encontrado " . ($result->rowCount()) . " registros!" . PHP_EOL;
} else {
    echo "Nada encontrado!" . PHP_EOL;
}

$result = delete_cart_by_id($database, '10');
echo "Deletar pelo id ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = list_all_carts($database);
if ($result) {
    echo "Encontrado " . ($result->rowCount()) . " registros!" . PHP_EOL;
} else {
    echo "Nada encontrado!" . PHP_EOL;
}

// test_crud_user.php