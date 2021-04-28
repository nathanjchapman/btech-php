<?php

require_once('database.php');

// Get all categories
$categories = db_all("categories");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="/styles/main.css" />
</head>
<body>
    <header>
        <h1>Product Manager</h1>
    </header>
    <main>
        <h2>Category List</h2>

        <form action="/11_access/add_category.php" method="POST">
            <p>
                <label>Add category:</label>
                <input type="text" name="categoryName" placeholder="Category name">
                <input type="submit" value="Add category">
            </p>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $category) : ?>
                <tr>
                    <td><?php echo $category['categoryID']; ?></td>
                    <td><?php echo $category['categoryName']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <p><a href="index.php">List Products</a></p>
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
