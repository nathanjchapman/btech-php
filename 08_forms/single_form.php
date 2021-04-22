<?php
// set default value of variables for initial page load
if (!isset($investment)) { $investment = ''; }
if (!isset($interest_rate)) { $interest_rate = ''; }
if (!isset($years)) { $years = ''; }


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $investment = filter_input(INPUT_POST, "investment", FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, "interest_rate", FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, "years", FILTER_VALIDATE_INT);

    // validate investment inputs here
    $error_messages = [];

    if (!is_numeric($investment) || $investment <= 0) {
        $error_messages["investment"] = "Must be a number greater than zero.";
    }

    if (!is_numeric($interest_rate) || $interest_rate <= 0) {
        $error_messages["interest_rate"] = "Must be a number greater than zero.";
    } elseif ($interest_rate > 15) {
        $error_messages["interest_rate"] = "Cannot exceed 15.";
    }

    if (!is_numeric($years) || $years <= 0) {
        $error_messages["years"] = "Must be a number greater than zero.";
    } elseif ($years > 30) {
        $error_messages["years"] = "Cannot exceed 30.";
    }

    // calculate the future value
    $future_value = $investment;
    for ($i = 1; $i <= $years; $i++) {
        $future_value = $future_value + $future_value * $interest_rate * 0.01;
    }

    // apply currency and percent formatting
    $investment_f = '$' . number_format($investment, 2);
    $yearly_rate_f = $interest_rate . '%';
    $future_value_f = '$' . number_format($future_value, 2);
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
        <?php
        if (!empty($error_messages) || count($_POST) == 0) { ?>
        <h1>Future Value Calculator</h1>
        <?php if (!empty($error_messages)) { ?>
            <p class="error">Please fix errors below</p>
        <?php } ?>
        <form action="/08_forms/single_form.php" method="post">
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
                <input type="submit" value="Calculate">
            </p>
        </form>

        <?php } else {
        // calculate the future value
        $future_value = $investment;
        for ($i = 1; $i <= $years; $i++) {
            $future_value = $future_value + $future_value * $interest_rate * 0.01;
        }

        // apply currency and percent formatting
        $investment_f = '$' . number_format($investment, 2);
        $yearly_rate_f = $interest_rate . '%';
        $future_value_f = '$' . number_format($future_value, 2);
        ?>
        <h1>Future Value</h1>
        <dl>
            <dt>Investment Amount:</dt>
            <dd><?php echo $investment_f; ?></dd>
        </dl>

        <dl>
            <dt>Yearly Interest Rate:</dt>
            <dd><?php echo $yearly_rate_f; ?></dd>
        </dl>

        <dl>
            <dt>Number of Years:</dt>
            <dd><?php echo $years; ?></dd>
        </dl>

        <dl>
            <dt>Future Value:</dt>
            <dd><?php echo $future_value_f; ?></dd>
        </dl>
        <?php } ?>
    </main>
</body>
</html>
