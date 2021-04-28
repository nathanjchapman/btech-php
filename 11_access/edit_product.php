<?php
// Get the product data
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

// Validate inputs
if ($category_id == null || $category_id == false ||
        $code == null || $name == null || $price == null || $price == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    $key_values = "categoryID = '$category_id', productCode = '$code', productName = '$name', listPrice = '$price'";
    db_update("products", "productID = $product_id", $key_values);

    if (mysqli_connect_errno()) {
        $error = mysqli_connect_error();
        header("Location:database_error.php?error=$error");
    } else {
        header("Location:index.php?category_id=$category_id");
    }
}


?>
