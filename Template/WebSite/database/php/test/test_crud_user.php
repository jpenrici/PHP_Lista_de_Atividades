<?php

require_once "../../config/config.php";
// var_dump($database);

require_once "../crud_user.php";

$username = "user1";

$result = create_user($database, $username, "$username@provedor1.com", "123", "123");
echo "Criar usuário ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = read_user_by_username($database, $username);
if ($result) {
    echo "Encontrado " . ($result->rowCount()) . " registros para " . $username . "!" . PHP_EOL;
} else {
    echo "Nada encontrado!" . PHP_EOL;
}

$result = update_user_by_id($database, '10', "", "newemail@provedor1.com", "");
echo "Atualizar por 'id' ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = delete_user_by_id($database, '10');
echo "Deletar por 'id' ... " . ($result ? "ok" : "ignorado") . PHP_EOL;

$result = list_all_users($database);
if ($result) {
    echo "Encontrado " . ($result->rowCount()) . " registros!" . PHP_EOL;
} else {
    echo "Nada encontrado!" . PHP_EOL;
}

// test_crud_user.php