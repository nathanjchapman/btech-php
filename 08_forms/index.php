<?php
//set default value of variables for initial page load
if (!isset($investment)) {
    $investment = '';
}
if (!isset($interest_rate)) {
    $interest_rate = '';
}
if (!isset($years)) {
    $years = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>

<body>
    <main>
        <h1>Future Value Calculator</h1>
        <?php if (!empty($error_messages)) { ?>
            <p class="error">Please fix errors below</p>
        <?php } ?>
        <form action="/08_forms/display_results.php" method="post">
            <p>
                <label>Investment Amount:</label>
                <input type="text" name="investment" value="<?php echo htmlspecialchars($investment); ?>">
                <?php if (!empty($error_messages["investment"])) { ?>
                    <br>
                    <span class="error"><?php echo htmlspecialchars($error_messages["investment"]); ?></span>
                <?php } ?>
            </p>
            <p>

                <label>Yearly Interest Rate:</label>
                <input type="text" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate); ?>">
                <?php if (!empty($error_messages["interest_rate"])) { ?>
                    <br>
                    <span class="error"><?php echo htmlspecialchars($error_messages["interest_rate"]); ?></span>
                <?php } ?>
            </p>
            <p>

                <label>Number of Years:</label>
                <input type="text" name="years" value="<?php echo htmlspecialchars($years); ?>">
                <?php if (!empty($error_messages["years"])) { ?>
                    <br>
                    <span class="error"><?php echo htmlspecialchars($error_messages["years"]); ?></span>
                <?php } ?>
            </p>
            <p>
                <input type="submit" value="Calculate"><br>
            </p>
        </form>
    </main>
</body>
</html>
