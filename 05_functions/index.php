<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Assignment 05 | Functions</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>
<body>
    <h1>Assignment 05</h1>
    <h2>Functions</h2>
    <section>
        <h3>Part 1.</h3>
        <p>
        <?php
            function hello() {
                echo "Hello, world!";
            }
            hello();
        ?>
        </p>
    </section>
    <hr>

    <section>
        <h3>Part 2.</h3>
        <p>
        <?php
            function calculate($width, $length) {
                $area = $width * $length;
                return "The area of a rectangle with a width of $width inches and a length of $length inches is: $area inches.";
            }
            echo calculate(3, 4);
        ?>
        </p>
    </section>
    <hr>

    <section>
        <h3>Part 3.</h3>

        <?php
            function tablize($str1='this', $str2='that', $str3='and', $str4='another') {
                return "<table><tr><td>$str1</td><td>$str2</td><td>$str3</td><td>$str4</td></tr></table>";
            }
            echo "<p><strong>Default values</strong>:<br>";
            echo tablize();
            echo "</p>";

            echo "<p><strong>Passed values</strong>:<br>";
            echo tablize("you", "me", "and", "someone else");
            echo "</p>";
        ?>
    </section>
    <hr>

    <section>
        <h3>Part 4.</h3>

        <p>
        <?php
            function echo_string($input) {
                echo $input;
            }

            function calculate_and_print_area($width, $length) {
                $area = $width * $length;
                echo_string($area);
            }

            echo "Given a width of 12 and a length of 10 the area will be: ";
            calculate_and_print_area(12, 10);
        ?>
        </p>
    </section>
    <hr>

    <section>
        <h3>Part 5.</h3>

        <p><em>Calculate a tip. Takes 2 arguments <code>$total</code> and <code>$percentage</code>.</em><p>
        <p>
        <?php
            function calculate_tip($total, $percentage) {
                return number_format($total * ($percentage / 100), 2);
            }

            echo "Given a total of $10.00 and a percentage of 25%:<br>";
            echo "<strong>Tip: $" . calculate_tip(10, 25) . "</strong>";

            echo "</p><p>";
            echo "Given a total of $15.28 and a percentage of 18%:<br>";
            echo "<strong>Tip: $" . calculate_tip(15.28, 18) . "</strong>";
        ?>
        </p>
    </section>
</body>
</html>
