<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Assignment 04 | Loops</title>
    <link rel="stylesheet" href="/styles/index.css">
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
        <table>
            <tbody>
            <?php
                for ($i=1; $i < 8; $i++) {
                    echo "<tr>";
                    for ($j=1; $j < 8; $j++) {
                        echo "<td>" . $j*$i . "</td>";
                    }
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </section>
    <hr>

    <section>
        <h3>Part 4.</h3>
        <table>
            <thead>
                <th colspan="12">Days in a Month</th>
            </thead>
            <tbody>
            <?php
                $months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                $daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

                echo "<tr>";
                foreach ($months as $key => $value) {
                    echo "<td><b>" . $value . "</b></td>";
                }
                echo "</tr>";

                echo "<tr>";
                foreach ($daysInMonth as $key => $value) {
                    echo "<td>" . $value . "</td>";
                }
                echo "</tr>";
            ?>
            </tbody>
        </table>
    </section>
</body>
</html>
