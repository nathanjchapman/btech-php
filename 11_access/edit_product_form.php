<?php

require('database.php');

$product_id = filter_input(INPUT_GET, 'product_id', FILTER_VALIDATE_INT);
$result = db_filter("products", "productID = $product_id");
$product = mysqli_fetch_assoc($result);

//Get Categories from the Database
$categories = db_all("categories");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="/styles/main.css">
</head>
<body>
    <header><h1>Product Manager</h1></header>

    <main>
        <h1>Edit Product</h1>
        <form action="/11_access/edit_product.php" method="POST">
            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
            <p>
                <label>Category:</label>
                <select name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['categoryID']; ?>" <?php if ($category["categoryID"] == $product["categoryID"]) {print 'selected="true"';}  ?>>
                        <?php echo $category['categoryName']; ?>
                    </option>
                <?php endforeach; ?>
                </select>
            </p>
            <p>
                <label>Code:</label>
                <input type="text" name="code" value="<?php echo $product['productCode'] ?>"><br>
            </p>
            <p>
                <label>Name:</label>
                <input type="text" name="name" value="<?php echo $product['productName'] ?>"><br>
            </p>
            <p>
                <label>List Price:</label>
                <input type="text" name="price" value="<?php echo $product['listPrice'] ?>"><br>
            </p>
            <p>
                <label>&nbsp;</label>
                <input type="submit" value="Save Changes"> or <a href="index.php">Cancel</a>
            </p>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
<?php
mysqli_free_result($product);
mysqli_free_result($categories);
db_disconnect($db);
?>
