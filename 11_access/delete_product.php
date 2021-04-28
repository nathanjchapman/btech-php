<?php
require_once('database.php');

// Get IDs
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Delete the product from the database
db_delete("products", "productID = $product_id");

if (mysqli_connect_errno()) {
    $error = mysqli_connect_error();
    header("Location:database_error.php?error=$error");
} else {
    header("Location:index.php");
}

?>
<?php
db_disconnect($db);
?>
