<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id      = $_POST['blog_id'];
        $author  = $_POST['blog_author'];
        $title   = $_POST['blog_title'];
        $image   = $_POST['blog_image'];
        $description = $_POST['blog_description'];

        require_once "../../../database/config/config.php";
        require_once "../../../database/php/crud_blog.php";

        if (is_numeric($id)) {
            $result = update_post_by_id($database, $id, $author, $title, $description, $image);
        } else {
            $result = create_post($database, $author, $title, $description, $image);
        }
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