<?php

require_once "../config/config.php";
require_once "crud_blog.php";

$img = "https://www.w3.org/html/logo/badge/html5-badge-h-solo.png";

$posts = [
    ["Autor Desconhecido", "Mundo Virtual", "No mundo virtual reinam uns e zeros."],
    ["Outro Autor"       , "Sonhar", "Sonhe acordado e vá em frente!"],
    ["Mais um Autor"     , "Matemática", "Na estatística da vida tudo é possível."]
];

foreach($posts as $post) {
    $result = create_post($database, $post[0], $post[1], $post[2],  $img);
    echo "Criar post ... " . ($result ? "ok" : "ignorado") . PHP_EOL;
}

$result = list_all_posts($database);
if ($result) {
    echo "Encontrado " . ($result->rowCount()) . " registros!" . PHP_EOL;
} else {
    echo "Falhou!";
}

// prepare_blog.php