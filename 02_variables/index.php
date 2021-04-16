<!DOCTYPE html>
<html>
<head>
    <title>Assignment 02 | Variables</title>
    <style>
        body {
            font-family: monospace;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Assignment 02</h1>
    <h2>Variables</h2>
    <section>
        <h3>Part 1.</h3>

        <?php
            echo "Twinkle, Twinkle little star.<br>";
        ?>
    </section>
    <hr>

    <section>
        <h3>Part 2.</h3>

        <?php
            $x = 10;
            $y = 7;
            $result = 0;

            echo "10 + 7 = " . $x + $y . "<br>";
            echo "10 - 7 = " . $x - $y . "<br>";
            echo "10 * 7 = " . $x * $y . "<br>";
            echo "10 / 7 = " . $x / $y . "<br>";
            echo "10 % 7 = " . $x % $y;
        ?>
    </section>
    <hr>

    <section>
        <h3>Part 3.</h3>
        <?php
            $variable = 8;
            echo "Value is now $variable.<br>";

            $variable = $variable + 2;
            echo "Add 2. Value is now $variable.<br>";

            $variable = $variable - 4;
            echo "Subtract 4. Value is now $variable.<br>";

            $variable = $variable * 5;
            echo "Multiply by 5. Value is now $variable.<br>";

            $variable = $variable / 3;
            echo "Divide by 3. Value is now $variable.<br>";

            $variable = $variable + 1;
            echo "Increment value by one. Value is now $variable.<br>";

            $variable = $variable - 1;
            echo "Decrement value by one. Value is now $variable.<br>";

        ?>
    </section>
    <hr>

    <section>
        <h3>Part 4.</h3>
        <?php
            $around = "around";

            echo 'What goes ' . $around . ' comes ' . $around . '.';
        ?>
    </section>
    <hr>

    <section>
        <h3>Part 5.</h3>
        <?php
            $weather = ["rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind"];

            echo "We've seen all kinds of weather this month. At the beginning of the month, we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].";
        ?>
    </section>
    <hr>

    <section>
        <h3>Part 6.</h3>
        <?php
            $cities = array(
                "Japan" => "Tokyo",
                "Mexico" => "Mexico City",
                "USA" => "New York City",
                "India" => "Mumbai",
                "South Korea" => "Seoul",
                "China" => "Shanghai",
                "Nigeria" => "Lagos",
                "Argentina" => "Buenos Aires",
                "Egypt" => "Cairo",
                "England" => "London"
            );

            foreach ($cities as $country => $city) {
                echo "$city, $country.<br>";
            }
        ?>
    </section>

</body>
</html>
