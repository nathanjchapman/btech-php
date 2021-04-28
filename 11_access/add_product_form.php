<?php

require('database.php');
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
        <h2>Add Product</h2>
        <form action="/11_access/add_product.php" method="POST">
            <p>
                <label>Category:</label>
                <select name="category_id">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['categoryID']; ?>">
                        <?php echo $category['categoryName']; ?>
                    </option>
                <?php endforeach; ?>
                </select>
            </p>
            <p>
                <label>Code:</label>
                <input type="text" name="code"><br>
            </p>
            <p>
                <label>Name:</label>
                <input type="text" name="name"><br>
            </p>
            <p>
                <label>List Price:</label>
                <input type="text" name="price"><br>
            </p>
            <p>
                <input type="submit" value="Add Product"> or
                <a href="index.php">Cancel</a>
            </p>
        </form>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
<?php
mysqli_free_result($categories);
db_disconnect($db);
?>
