<?php
// get the data from the form
$investment = filter_input(INPUT_POST, "investment", FILTER_VALIDATE_FLOAT);
$interest_rate = filter_input(INPUT_POST, "interest_rate", FILTER_VALIDATE_FLOAT);
$years = filter_input(INPUT_POST, "years", FILTER_VALIDATE_INT);

// validate investment inputs here
$error_messages = [];

if (!is_numeric($investment) || $investment < 0) {
    $error_messages["investment"] = "Must be a number greater than zero.";
}

if (!is_numeric($interest_rate) || $interest_rate < 0) {
    $error_messages["interest_rate"] = "Must be a number greater than zero.";
} elseif ($interest_rate > 15) {
    $error_messages["interest_rate"] = "Cannot exceed 15.";
}

if (!is_numeric($years) || $years < 0) {
    $error_messages["years"] = "Must be a number greater than zero.";
} elseif ($years > 30) {
    $error_messages["years"] = "Cannot exceed 30.";
}
// if an error message exists, go to the index page
if (!empty($error_messages)) {
    include 'index.php';
    exit();
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
?>
<!DOCTYPE html>
<html>
<head>
    <title>Future Value Calculator</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>

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
            <dd><?php echo $future_value_f; ?></dd><br>
        </dl>
    </main>
</body>
</html>
