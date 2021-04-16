<!DOCTYPE html>
<html>
<head>
    <title>Assignment 04 | Loops</title>
    <style>
        body {
            font-family: monospace;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Assignment 04</h1>
    <h2>Loops</h2>
    <section>
        <h3>Part 1.</h3>

        <?php
            $a = 0;
            while ($a < 9) {
                echo "abc ";
                $a++;
            }

            echo "<br>";

            do {
                echo "xyz ";
                $b++;
            } while ($b < 9);

            echo "<br>";


        ?>
        <ol>
            <?php
                $alphabet = ["A","B","C","D","E","F"];

                for ($i=0; $i < count($alphabet); $i++) {
                    echo "<li>Item $alphabet[$i]</li>";
                }
            ?>
        </ol>
    </section>
    <hr>

    <section>
        <h3>Part 2.</h3>
        <ul>
        <?php
            for ($i=1; $i <= 12; $i++) {
                $square = $i**2;
                echo "<li>$i<sup>2</sup> = $square</li>";
            }
        ?>
        </ul>
    </section>
    <hr>

    <section>
        <h3>Part 3.</h3>

        <?php

        ?>
    </section>
</body>
</html>
