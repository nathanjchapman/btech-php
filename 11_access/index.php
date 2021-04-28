<?php
require_once('database.php');

// Get category ID
if (!isset($category_id)) {
    $category_id = filter_input(INPUT_GET, 'category_id',
            FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
}
// Get name for selected category
$category_name_result = db_filter("categories", "categoryID = '$category_id'", "categoryName");
$category_name = mysqli_fetch_assoc($category_name_result);

// Get all categories
$categories = db_all("categories");

// Get products for selected category
$products = db_filter("products", "categoryID = $category_id")


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Guitar Shop</title>
    <link rel="stylesheet" href="/styles/main.css" />
</head>
<body>
<header>
    <h1>Product Manager</h1>
</header>
<main>
    <h2>Product List</h2>
    <aside>
        <h3>Categories</h3>
        <nav>
        <ul>
            <?php foreach ($categories as $category) : ?>
            <li><a href=".?category_id=<?php echo $category['categoryID']; ?>">
                    <?php echo $category['categoryName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>
        <p><a href="/11_access/category_list.php">List Categories</a></p>
    </aside>

    <section>
        <h3><?php echo $category_name["categoryName"]; ?></h3>
        <p><a href="/11_access/add_product_form.php">Add Product</a></p>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th class="right">Price</th>
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
                <td><button><a href="/11_access/edit_product_form.php?product_id=<?php echo $product['productID']; ?>">Edit</a></button></td>
                <td><form action="/11_access/delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $product['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
</footer>
</body>
</html>
<?php
mysqli_free_result($category_name_result);
mysqli_free_result($categories);
mysqli_free_result($products);
db_disconnect($db);
?>
