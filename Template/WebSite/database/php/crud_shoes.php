<?php
/*
    CRUD para Testes.

    Referências:
        https://www.php.net/docs.php
        https://www.w3schools.com/php/default.asp

        https://www.php.net/manual/pt_BR/book.pdo.php
        https://www.php.net/manual/pt_BR/pdo.exec.php
        https://www.php.net/manual/pt_BR/pdo.query.php
        https://www.php.net/manual/pt_BR/pdostatement.fetch.php
*/   

require_once "../config/config.php";
require_once "db_functions.php";
require_once "crud_product.php";

// Tabela 'Products'
// id name description price discount quantity image createdAt updatedAt category_id

$names = ['id', 'name', 'description', 'price', 'discount', 'quantity', 'image', 'category_id'];
$shoes = [
    ["Tênis Runner", "Tênis Esportivo para Caminhada"        , "195", "0" , "1000", "shoes1", "4"],
    ["Tênis Power II", "Tênis Esportivo Academia Fitness"    , "150", "0" , "1000", "shoes2", "4"],
    ["Tênis Light", "Tênis Esportivo Ultraleve"              , "240", "0" , "1000", "shoes3", "4"],
    ["Tênis Race", "Tênis Esportivo para Exercícios Tecido"  , "135", "0" , "1000", "shoes4", "4"],
    ["Tênis Runner Plus", "Tênis Esportivo para Caminhada"   , "190", "5" , "1000", "shoes5", "4"],
    ["Tênis Power Fit", "Tênis Esportivo Academia Fitness"   , "320", "5" , "1000", "shoes6", "4"],
    ["Tênis Light Plus", "Tênis Esportivo Ultraleve"         , "234", "5" , "1000", "shoes7", "4"],
    ["Tênis Racing", "Tênis Esportivo para Exercícios Tecido", "170", "10", "1000", "shoes8", "4"]                                
];

// CRUD : crud_product.php
// create_product($database, $name, $description, $price, $discount, $quantity, $image, $category_id)

foreach ($shoes as $i) {
    $result = create_product($database, $i[0], $i[1], $i[2], $i[3], $i[4], $i[5], $i[6]);
    echo "Criar produto {$i[0]} ... " . ($result ? "ok" : "ignorado") . PHP_EOL;
}

$result = list_all_products($database);
echo "Encontrado " . ($result->rowCount()) . " resgistros!" . PHP_EOL;

// PDO::FETCH_ASSOC: retorna um array indexado pelo nome da coluna como retornada no resultado.
// fetch()         : método de busca.
const PHP_TAB = "\t";
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $text = "";
    for ($i = 0; $i < count($names); $i++) {
        $text .= PHP_TAB . $row[$names[$i]];
    }
    echo $text . PHP_EOL;
}

// crud_shoes.php