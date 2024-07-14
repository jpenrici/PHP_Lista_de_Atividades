<?php
    session_start();
      
    if (isset($_SESSION["user"]) && isset($_SESSION["userID"])) {
        $activeUser = $_SESSION["user"];
        $activeUserID = $_SESSION["userID"];

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "../../../database/config/config.php";
            require_once "../../../database/php/db_functions.php";
            require_once "../../../database/php/crud_cart.php";
            
            $product_id = $_GET['controlCart'];
            if (!empty($product_id) && is_numeric($product_id)) {
                $result = create_cart($database, '1', $activeUserID, $product_id);
            }
            if (!empty($product_id) && $product_id == 'null') {
                foreach($_GET['cartBox'] as $item) {
                    $result = delete_cart_by_id($database, $item);
                }
            }
        }
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0; url=../shop.php">
    <title>Temporary Page</title>
</head>

<body>

    <!-- Página de redirecionamento -->

</body>

</html>