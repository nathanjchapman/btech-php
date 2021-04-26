<?php

$investment = filter_input(INPUT_POST, "investment", FILTER_VALIDATE_FLOAT);
$interest_rate = filter_input(INPUT_POST, "interest_rate", FILTER_VALIDATE_FLOAT);
$years = filter_input(INPUT_POST, "years", FILTER_VALIDATE_INT);

$expires = time() + 60*60*24*2;
$path = '/09_cookies/cookie/';

setcookie("investment", $investment, $expires, $path);
setcookie("interest_rate", $interest_rate, $expires, $path);
setcookie("years", $years, $expires, $path);

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

if (!empty($error_messages)) {
    setcookie("error_messages", serialize($error_messages), $expires, $path);
    header("Location:index.php");
} else {
    setcookie("error_messages", "", false, $path);
}


$future_value = $investment;
for ($i = 1; $i <= $years; $i++) {
    $future_value = $future_value + $future_value * $interest_rate * 0.01;
}

$investment_f = '$' . number_format($investment, 2);
$yearly_rate_f = $interest_rate . '%';
$future_value_f = '$' . number_format($future_value, 2);

?>
<!DOCTYPE html>
<html lang="en">
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

            <dt>Yearly Interest Rate:</dt>
            <dd><?php echo $yearly_rate_f; ?></dd>

            <dt>Number of Years:</dt>
            <dd><?php echo $years; ?></dd>

            <dt>Future Value:</dt>
            <dd><?php echo $future_value_f; ?></dd><br>
        </dl>
    </main>
</body>
</html>
