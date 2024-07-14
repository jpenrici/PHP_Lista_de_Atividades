<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Editor</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/editor.css">

</head>

<body>
    <?php
        $id = $author = $title = $description = $image = $updated = "";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET['id'];
            if (is_numeric($id)) {
                require_once "../../../database/config/config.php";
                require_once "../../../database/php/crud_blog.php";
                $result = read_post_by_id($database, $id);
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $author  = $row['author'];
                    $title = $row['title'];
                    $image   = $row['image'];
                    $updated = $row['updatedAt'];
                    $description = $row['description'];
                }
            } 
        }
    ?>

    <h1>Editor</h1>

    <hr>
    <form action="update.php" method="POST">
        <input type="submit" value=<?php echo (is_numeric($id) ? "Atualizar" : "Novo") ?>>
        <hr>
        <label for="blog_id">ID</label><br>
        <input type="text" name="blog_id" id="blog_id" value=<?php echo $id; ?> readonly>
        <br>
        <label for="blog_author">Author</label><br>
        <textarea name="blog_author" id="blog_author"><?php echo $author; ?></textarea>
        <br>
        <label for="blog_title">Title</label><br>
        <textarea name="blog_title" id="blog_title"><?php echo $title; ?></textarea>
        <br>        
        <label for="blog_description">Descrição</label><br>
        <textarea name="blog_description" id="blog_description"><?php echo $description; ?></textarea>
        <br>
        <label for="blog_image">URL Imagem</label><br>
        <textarea name="blog_image" id="blog_image"><?php echo $image; ?></textarea>
        <br>
    </form>
    <hr>
    <div class="buttons">
        <button onclick="clean()">Limpar</button>
        <button onclick="cancel()">Cancelar</button>
    </div>

    <!-- JavaScript -->
    <script>
        function clean() {
            blog_author.value = "";
            blog_title.value   = "";
            blog_image.value  = "";
            blog_description.value = "";
        }

        function cancel() {
            window.location.href = "../blog.php";
        }
    </script>
</body>

</html>