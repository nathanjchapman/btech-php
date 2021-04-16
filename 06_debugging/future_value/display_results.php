<?php
    // get the data from the form
    $investment = filter_input(INPUT_POST, 'investment',
            FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate',
            FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years',
            FILTER_VALIDATE_INT);

    // validate investment
    if ( $investment === NULL || $investment === FALSE ) {
        $error_message = 'Investment must be a valid number.'; }
    else if ( $investment <= 0 ) {
        $error_message = 'Investment must be greater than zero.'; }

    // validate interest rate
    else if ( $interest_rate === NULL || $interest_rate === FALSE ) {
        $error_message = 'Interest rate must be a valid number.'; }
    else if ( $interest_rate <= 0 ) {
        $error_message = 'Interest rate must be greater than zero.'; }

    // validate years
    else if ( $years === NULL || $years === FALSE ) {
        $error_message = 'Number of years must be a valid whole number.'; }
    else if ( $years <= 0 ) {
        $error_message = 'Numbr of years must be greater than zero.'; }

    // set error message to empty string if no invalid entries
    else {
        $error_message = ''; }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        incude('index.php');
        exit();
    }

    // calculate the future value
    $future_value = $investment;
    for ($i = 1; $i <= $years; $i++) {
        $future_value = $future_value + ($future_value * $interest_rate * .01);
    }

    // apply currency and percent formatting
    $investment_f = '$'.number_format($investment, 2);
    $yearly_rate_f = $interest_rate.'%';
    $future_value_f = '$'.number_format($future_value, 2);
?>
<!DOCTYPE html>
<html>
<head>
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

        <label>Investment Amount:</label>
        <span><?php echo $investment_f; ?></span><br>

        <label>Yearly Interest Rate:</label>
        <span><?php echo $yearly_rate_f; ?></span><br>

        <label>Number of Years:</label>
        <span><?php echo $years; ?></span><br>

        <label>Future Value:</label>
        <span><?php echo $future_value_f; ?></span><br>
    </main>
</body>
</html>
