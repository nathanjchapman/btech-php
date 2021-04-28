<?php

$category_name = filter_input(INPUT_POST, "categoryName");

if ($category_name == null || $category_name == false ) {
    $error = "Invalid product data. Check all fields and try again.";
    header("Location:database_error.php?error=$error");
} else {
    require_once("database.php");

    $result = db_insert("categories", "categoryName = '$category_name'");

    header("Location:category_list.php");
}

?>
