<?php
    //set default value of variables for initial page load
    if (!isset($investment)) { $investment = ''; }
    if (!isset($interest_rate)) { $interest_rate = ''; }
    if (!isset($years)) { $years = ''; }
?>
<!DOCTYPE html">
<html>
<head>
    <meta charset="utf-8">
    <title>Assignment 06 | Future Value Calculator</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>

<body>
    <nav>
        <a href="/06_debugging/">Home</a>
    </nav>
    <main>
    <h1>Assignment 06</h1>
    <h2>Debugging: Future Value Calculator</h2>
    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php } // end if ?>
    <form action="./display_results.php" method="post">
        <p>
            <label>Investment Amount:</label>
            <input type="text" name="investment" value="<?php echo $investment; ?>">
        </p>
        <p>
            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate" value="<?php echo $interest_rate; ?>">
        </p>
        <p>
            <label>Number of Years:</label>
            <input type="text" name="years" value="<?php $years; ?>">
        </p>

        <p>
            <input type="submit" value="Calculate"><br>
        </p>
    </form>
    </main>
</body>
</html>
