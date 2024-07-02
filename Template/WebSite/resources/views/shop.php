<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWC</title>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../css/home.css">

</head>

<body>

    <?php
    include './base/header.php';
    ?>

    <h1>To Do!</h1>

    <?php
        require "../../database/config/config.php";
        require "../../database/php/db_functions.php";
        require "../../database/php/crud_product.php";

        $pdo = connect($hostname, $dbname, $user, $password);
        if ($pdo) {
            echo "Ok";
        }

        $name = "Teste";
        $description = "teste";
        $price = 10;
        $discount = "teste teste teste";
        $image = "image";
        $quantity = 10;
        $category_id = 1;

        $result =  create_product($database, $name, $description, $price,
                    $discount, $quantity, $image, $category_id);

        if ($result) {
            echo "ok inserido!";
        }
    ?>

    <?php
    include './base/footer.html';
    ?>

    <!-- CUSTOM JS -->

</body>

</html>