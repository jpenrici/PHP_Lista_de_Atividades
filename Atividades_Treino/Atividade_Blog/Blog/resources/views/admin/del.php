<?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = $_GET['id'];

        require_once "../../../database/config/config.php";
        require_once "../../../database/php/crud_blog.php";
        $result = delete_post_by_id($database, $id);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0; url=../blog.php">
    <title>Blog</title>
</head>

<body>

    <!-- Página de redirecionamento -->

</body>

</html>