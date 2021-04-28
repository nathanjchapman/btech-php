<?php
$error =  filter_input(INPUT_GET, 'error');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Guitar Shop</title>
    <link rel="stylesheet" href="/styles/main.css">
</head>
<body>
    <header>
        <h1>My Guitar Shop</h1>
    </header>

    <main>
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>
        <p>The database must be installed as described in the appendix.</p>
        <p>MySQL must be running as described in chapter 1.</p>
        <p>Error message:</p>
        <pre><?php echo $error; ?></pre>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
    </footer>
</body>
</html>
