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
        if (isset($_SESSION["user"])) {
            $activeUser = $_SESSION["user"];
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
            $shop = "<div class='right'>
                <div class='dropdown'>
                    <button class='dropbtn'>
                        <img src='../images/icons/svg/cart.svg' alt='SHOP' title='Shop.'></button>
                    <div id='account-menu' class='dropdown-content'>
                        <p>Pedido inserido 1 ...</p><br>
                        <p>Pedido inserido 2 ...</p><br>
                        <p>Pedido inserido 3 ...</p><br>
                        <p>Pedido inserido 4 ...</p><br>
                        <hr>
                        <p>Total</p><br>
                        <a href='#'>Comprar</a>
                    </div>
                </div>
            </div>";            
        }    
        
        echo $shop;
        echo $login;
    ?>

</div>