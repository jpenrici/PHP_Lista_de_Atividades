<?php

require_once "../config/config.php";
require_once "crud_product.php";

$result = create_product($database, "car", "remote control car", "-20", "No number", "", "", "");
echo "Criar produto ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = read_product_by_name($database, "CAR");
if ($result) {
    echo "Encontrado " . ($result->rowCount()) . " registros!" . PHP_EOL;
} else {
    echo "Nada encontrado!" . PHP_EOL;
}

$result = update_product_by_id($database, "1", "car", "smartphone control car", "-20", "-20", "-20", "", "3");
echo "Atualizar por 'id' ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = update_product_by_id($database, "1", "car", "smartphone control car", "20.5", "10", "1000", "", "3");
echo "Atualizar por 'id' ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = delete_product_by_id($database, '10');
echo "Deletar por 'id' ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = list_all_products($database);
if ($result) {
    echo "Encontrado " . ($result->rowCount()) . " resgistros!" . PHP_EOL;
} else {
    echo "Nada encontrado!" . PHP_EOL;
}

// test_crud_product.php