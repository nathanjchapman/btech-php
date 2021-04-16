<!DOCTYPE html>
<html>
<head>
    <title>Assignment 03 | Logical Expressions</title>
    <style>
        body {
            font-family: monospace;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Assignment 03</h1>
    <h2>Logical Expressions</h2>
    <section>
        <h3>Part 1.</h3>

        <?php
            if (date('F',time()) == "August") {
                echo "It's August, so it's really hot.";
            } else {
                echo "Not August, so at least it's not in the peak of the heat.";
            }
        ?>
    </section>
    <hr>

    <section>
        <h3>Part 2.</h3>

        <?php
            echo (date('F', time()) == "August" ? "It's August, so it's really hot." : "Not August, so at least it's not in the peak of the heat.");
        ?>
    </section>
    <hr>

    <section>
        <h3>Part 3.</h3>

        <?php
            switch (date('F', time())) {
                case 'January':
                    echo "Summer is a promissory note signed in June, its long days spent and gone before you know it, and due to be repaid next January.";
                    break;
                case 'February':
                    echo "Why does February feel like one big Tuesday?";
                    break;
                case 'March':
                    echo "Springtime is the land awakening. The March winds are the morning yawn.";
                    break;
                case 'April':
                    echo "Here cometh April again, and as far as I can see the world hath more fools in it than ever.";
                    break;
                case 'May':
                    echo "The world's favorite season is the spring. All things seem possible in May.";
                    break;
                case 'June':
                    echo "There are two seasons in Scotland: June and Winter.";
                    break;
                case 'July':
                    echo "Here men from the planet Earth first set foot upon the Moon. July 1969 AD. We came in peace for all mankind.";
                    break;
                case 'August':
                    echo "August, the summer's last messenger of misery, is a hollow actor.";
                    break;
                case 'September':
                    echo "We know that in September, we will wander through the warm winds of summer's wreckage. We will welcome summer's ghost.";
                    break;
                case 'October':
                    echo "I'm so glad I live in a world where there are Octobers.";
                    break;
                case 'November':
                    echo "The month of November makes me feel that life is passing more quickly. In an effort to slow it down, I try to fill the hours more meaningfully.";
                    break;
                case 'December':
                    echo "God gave us memory so that we might have roses in December.";
                    break;

                default:
                    echo "Are you sure you know your months?";
                    break;
            }
        ?>
    </section>
</body>
</html>
