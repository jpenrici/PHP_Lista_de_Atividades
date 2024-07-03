<?php
    // Conexão com BD.
    require_once "../../database/config/config.php";
    require_once "../../database/php/db_functions.php";
    require_once "../../database/php/crud_user.php";
    require_once "../../database/php/crud_cart.php";
    require_once "../../database/php/crud_product.php";
?>

<div class="navbar">
    <a href="./home.php">HOME</a>
    <a href="./shop.php">SHOP</a>
    <a href="./services.php">SERVICES</a>
    <a href="./blog.php">BLOG</a>
    <a href="./contact.php">CONTACT</a>
    <a href="./about.php">ABOUT</a>

    <?php
        session_start();

        $login = "<div class='right'>
            <div class='dropdown'>
                <button class='dropbtn'>
                    <img src='../images/icons/svg/user.svg' alt='ACCOUNT' title='My Account.'></button>
                <div id='account-menu' class='dropdown-content'>
                    <a href='./admin/login.php'>Log In</a>
                    <a href='./admin/register.php'>Sign Up</a>
                    <a href='#'>Help</a>
                </div>
            </div>
        </div>";
 
        $shop = "";
        if (isset($_SESSION["user"]) && isset($_SESSION["userID"])) {
            $activeUser = $_SESSION["user"];
            $activeUserID = $_SESSION["userID"];
            $login = "<div class='right'>
                <div class='dropdown'>
                    <button class='dropbtn'>
                    Olá, $activeUser</button>
                    <div id='account-menu' class='dropdown-content'>
                        <a href='./admin/logout.php'>Log Out</a>
                        <a href='#'>Help</a>
                    </div>
                </div>
            </div>";

            // Shopping list
            $result = read_cart_by_userID($database, $activeUserID);
            if ($result) {
                $html = "";
                $total = 0;
                while($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $product = read_product_by_id($database, $row['product_id']);
                    while($row1 = $product->fetch(PDO::FETCH_ASSOC)) {
                        $subtotal = floatval($row['quantity']) * floatval($row1['price']);
                        $total += $subtotal;
                        $html .= "<input type='checkbox' name='p' id='p'>";
                        $html .= $row['quantity'] . " " . $row1['name'] . "<br>";
                        $html .= "Subtotal: R$" . $subtotal . "<hr>";
                    }
                }

                $shop = "<div class='right'>
                    <div class='dropdown'>
                        <button class='dropbtn'>
                            <img src='../images/icons/svg/cart.svg' alt='SHOP' title='Shop.'></button>
                        <div id='account-menu' class='dropdown-content'>
                            $html
                            <p>Total: R$ $total</p><br>
                            <hr>
                            <a href='#'>Comprar</a>
                            <hr>
                            <a href='#'>Descartar Selecionados</a>
                        </div>
                    </div>
                </div>";                 
            }
           
        }    
        
        echo $shop;
        echo $login;
    ?>

</div>
