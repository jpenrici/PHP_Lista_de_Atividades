<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $value = $_POST['table'];
    if (!empty($value)) {
        require_once "../../../database/config/config.php";
        require_once "../../../database/php/db_functions.php";
        require_once "../../../database/php/crud_product.php";
        require_once "../../../database/php/crud_user.php";
        require_once "../../php/tableByArray.php";

        if ($value == "user") {
            $id = $_POST['id_id'];
            $uname = $_POST['username_id'];
            $uemail = $_POST['email_id'];
            $upassword = $_POST['password_id'];
            $result = update_user_by_id($database, $id, $uname, $uemail, $upassword);
        } elseif ($value == "product") {
            $id = $_POST['id_id'];
            $name = $_POST['name_id'];
            $description = $_POST['descripion_id'];
            $price = $_POST['price_id'];
            $discount = $_POST['discount_id'];
            $quantity = $_POST['quantity_id'];
            $image = $_POST['image_id'];
            $category_id = $_POST['category_id'];
            $result = update_product_by_id($database, $id, $name, $description, $price, $discount, $quantity, $image, $category_id);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="0; url=./admin.php">
    <title>Temporary Page</title>
</head>

<body>

    <!-- Página de redirecionamento -->

</body>

</html>