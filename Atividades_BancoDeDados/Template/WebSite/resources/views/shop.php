<?php
    // Importação da função para construir Cards.
    require_once "./base/card.php";

    // Conexão com BD.
    require "../../database/config/config.php";
    require "../../database/php/crud_product.php";

    $products = [];
    $result = list_all_products($database);
    $index = 0;
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $products[$index++] = [$row['name'], $row['image'], $row['description'], $row['price'], $row['discount']];
    }
    // var_dump($products);

?>

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

    <!-- Content -->
    <div class="content">
        <!-- Line 1 - Products -->
        <div class="row">
            <h2>SHOP</h2>
            <!-- Column -->
            <?php
            for ($i = 0; $i < count($products); $i++) {
                $content = fullCard($products[$i][0], "../images/products/svg/" . $products[$i][1] . ".svg",
                                 $products[$i][2], $products[$i][3], $products[$i][4]);
                $html = "<div class='column'>
                            <!-- Card -->
                            <div class='card'>
                                $content
                            </div>
                        </div>";
                echo $html;
            }
        ?>

        </div>

        <?php
    include './base/footer.html';
    ?>

        <!-- CUSTOM JS -->

</body>

</html>