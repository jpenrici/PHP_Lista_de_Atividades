<?php

require_once "../config/config.php";
// var_dump($database);

require_once "crud_blog.php";

$author = "Author";

$result = create_post($database, $author, "Título 1", "Era uma vez ...", "URL Imagem");
echo "Criar post ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = create_post($database, $author, "Título 2",  "Era outra vez ...", "URL Imagem");
echo "Criar post ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = read_post_by_author($database, $author);
if ($result) {
    echo "Encontrado " . ($result->rowCount()) . " registros para " . $author . "!" . PHP_EOL;
} else {
    echo "Falhou!";
}

$result = delete_post_by_id($database, '1');
echo "Deletar por id ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = update_post_by_id($database, '2', "Novo Autor", "", "Nova postagem", "");
echo "Atualizar por id ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = list_all_posts($database);
if ($result) {
    echo "Encontrado " . ($result->rowCount()) . " registros!" . PHP_EOL;
} else {
    echo "Falhou!";
}

// test_crud_blog.php