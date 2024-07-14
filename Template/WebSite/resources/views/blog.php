<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JWC</title>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/slideShow.css">

</head>

<body>

    <?php
    include './base/header.php';
    ?>

    <h1>To Do!</h1>
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
    </div>

    <?php
    include './base/footer.html';
    ?>

    <!-- CUSTOM JS -->
    <script src="../js/slideShow.js"></script>

</body>

</html>