<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $table = $_GET['table'];
        if (!empty($id) && !empty($table)) {
            session_start();
            session_destroy();

            require_once "../../../database/config/config.php";
            require_once "../../../database/php/db_functions.php";
            require_once "../../../database/php/crud_product.php";
            require_once "../../../database/php/crud_user.php";

            $pdo = connect($database['hostname'], $database['dbname'], $database['user'], $database['password']);
            $result = delete_by_id($pdo, $table, 'id', $id);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0; url=./admin.php">
    <title>Blog</title>
</head>

<body>

    <!-- Página de redirecionamento -->

</body>

</html>