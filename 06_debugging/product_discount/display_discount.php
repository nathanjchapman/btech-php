<?php
    // get the data from the form
    $product_description = filter_input(INPUT_POST, 'product_description');
    $list_price = filter_input(INPUT_POST, 'list_price');
    $discount_percent = filter_input(INPUT_POST, 'discount_percent');

    // calculate the discount and discounted price
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;

    // apply currency formatting to the dollar and percent amounts
    $list_price_f = "$".number_format($list_price, 2);
    $discount_percent_f = $discount_percent . "%";
    $discount_f = "$".number_format($discount, 2);
    $discount_price_f = "$".number_format($discount_price, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Assignment 06 | Debugging: Product Discount Calculator</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>

<body>
    <nav>
        <a href="/06_debugging/">Home</a>
    </nav>
    <main>
        <h1>Assignment 06</h1>
        <h2>Debugging: Product Discount Calculator</h2>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($product_description); ?></span>
        <br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price_f); ?></span>
        <br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f); ?></span>
        <br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f; ?></span>
        <br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span>
        <br>
    </main>
</body>
</html>
