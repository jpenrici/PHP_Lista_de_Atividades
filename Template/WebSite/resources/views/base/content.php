<?php
    // Importação da função para construir Cards.
    require_once "card.php";

    // Conexão com BD.
    require "../../database/config/config.php";
    require "../../database/php/crud_product.php";

    $products = [];
    $result = list_all_products($database);
    $index = 0;
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $products[$index++] = [$row['name'], $row['image'], $row['description']];
    }
    // var_dump($products);

?>

<!-- Content -->
<div class="content">
    <!-- Line 1 - Slide Show -->
    <div class="row">
        <div>
            <div class="slideshow-container">
                <div class="slide">
                    <img src="../images/products/svg/shoes1.svg" alt="Produto 1" title="Produto 1" />
                </div>
                <div class="slide">
                    <img src="../images/products/svg/shoes2.svg" alt="Produto 2" title="Produto 2" />
                </div>
                <div class="slide">
                    <img src="../images/products/svg/shoes3.svg" alt="Produto 3" title="Produto 3" />
                </div>
                <div class="slide">
                    <img src="../images/products/svg/shoes4.svg" alt="Produto 4" title="Produto 4" />
                </div>
                <button class="prev" onclick="mover(-1)">&#10094;</button> <!-- &#10094; : Símbolo < -->
                <button class="next" onclick="mover(1)">&#10095;</button> <!-- &#10095; : Símbolo > -->
            </div>
        </div>
    </div>
    <!-- Line 2 - Products -->
    <div class="row">
        <h2>Most popular</h2>

        <!-- Column -->
        <?php
            for ($i = 0; $i < 4; $i++) {
                $content = card($products[$i][0], "../images/products/svg/" . $products[$i][1] . ".svg", $products[$i][2], "./shop.php");
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
    <!-- Line 3 - Banner -->
    <div class="row">
        <div>
            <img src="../images/banners/banner1.svg" style="padding: 18px; width: 100%;" />
        </div>
    </div>
    <!-- Line 4 - Products -->
    <div class="row">
        <h2>Special offers</h2>

        <!-- Column -->
        <?php
            for ($i = 7; $i > 3; $i--) {
                $content = card($products[$i][0], "../images/products/svg/" . $products[$i][1] . ".svg", $products[$i][2], "./shop.php");
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
    <!-- Line 5 - Banner -->
    <div class="row">
        <div>
            <img src="../images/banners/banner2.svg" style="padding: 18px; width: 100%;" />
        </div>
    </div>
    <!-- Line 6 - Newsletter -->
    <div class="row">
        <div class="newsletter">
            <h3>Newsletter</h3>
            <form action="newsletter.php" method="POST">
                <label for="nameNewsletter">Name:</label>
                <input type="text" name="nameNewsletter" id="nameNewsletter" required>
                <label for="emailNewsletter">Email:</label>
                <input type="email" name="emailNewsletter" id="emailNewsletter" required>
                <input type="submit" value="Register">
            </form>
        </div>
    </div>
</div>
