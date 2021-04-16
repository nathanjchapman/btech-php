<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Assignment 06 | Debugging: Temperature Converter</title>
        <link rel="stylesheet" href="/styles/index.css">
    </head>
    <body>
        <nav>
            <a href="/06_debugging/">Home</a>
        </nav>
        <h1>Assignment 06</h1>
        <h2>Debugging: Temperature Converter</h2>

        <?php
        /* Function to convert Fahrenheit to Celsius */
        function displayCelsius($fahrenheit, $size) {

            $celsius = 0;

            echo "Converting from Fahrenheit to Celsius<br>";

            /* Loop through the array */
            for($i=0; $i<count($fahrenheit); $i++) {

                /* Calculate and display celsius for
                 * for all Fahrenheit temps */
                $celsius = ($fahrenheit[$i] - 32) / 1.8;
                echo $fahrenheit[$i] . " &deg;F = $celsius &deg;C";
                echo "<br>";
            }

        }

        /* Function to convert from Celsius to Fahrenheit */
        function displayFahrenheit($celsius, $size) {

            $fahrenheit = 0;

            echo "Converting from Celsius to Fahrenheit<br>";

            /*Calculate and display Fahrenheit
             for each Celsius*/
            for($i=0; $i<count($celsius); $i++) {

                $fahrenheit = ($celsius[$i] * 1.8) +32;
                echo $celsius[$i] . " &deg;C = $fahrenheit &deg;F";
                echo "<br>";
            }

        }

        /* Array of temperatures */
        $celsius = array(-40, 0, 100);
        $fahrenheit = array(-40, 32, 212);

        $size = 3; /* Array size */

        /* Call displayCelsius
         * Pass fahrenheit and size */
        displayCelsius($fahrenheit, $size);

        echo "<br><br>";

        /* call displayFahrenheit
         * Pass celsius and size */
        displayFahrenheit($celsius, $size);

        ?>
    </body>
</html>
