<?php
// Get the product data
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, 'code');
$name = filter_input(INPUT_POST, 'name');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

// Validate inputs
if ($category_id == null || $category_id == false ||
        $code == null || $name == null || $price == null || $price == false) {
    $error = "Invalid product data. Check all fields and try again.";
    header("Location:database_error.php?error=$error");
} else {
    require_once('database.php');

    // Add the product to the database
    $key_values = "categoryID = '$category_id', productCode = '$code', productName = '$name', listPrice = '$price'";
    $result = db_insert("products", $key_values);


    // Display the Product List page
    header("Location:index.php?category_id=$category_id");

}
?>
