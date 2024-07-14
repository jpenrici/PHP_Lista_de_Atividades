<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/card.css">
</head>

<body>

    <h1>Simple Blog</h1>
    <hr>

    <?php
        require_once "../../database/config/config.php";
        require_once "../../database/php/crud_blog.php";
        require_once "../php/card.php";

        $result = list_all_posts($database);
        $posts = "";
        if ($result) {
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $id = $row['id'];
                $posts .= card($row['id'], $row['author'], $row['title'], $row['description'], $row['image'], $row['updatedAt'],
                "<img src='../images/icons/svg/edit.svg' alt='Editar' title='Editar' width='32px' onclick='redirect($id, true)' />
                <img src='../images/icons/svg/delete.svg' alt='Excluir' title='Excluir' width='32px' onclick='redirect($id, false)' />");
            }
        }
        $posts .= card("", "", "", "", "", "", 
            "<img src='../images/icons/svg/edit.svg' alt='Editar' title='Editar' width='32px' onclick='redirect(\"newCard\", true)' />") ;

        echo $posts;
    ?>

    <!-- JavaScript -->
    <script>
        function redirect(id, value) {
            if (value) {
                window.location.href = "./admin/editor.php?id=" + id;
            } else {
                window.location.href = "./admin/del.php?id=" + id;
            }
        }
    </script>

</body>

</html>