<!DOCTYPE html>
<html>
    <head>
        <title>Math Functions</title>
    </head>
    <body>
    
        <?php
            //pow function in charge of power (2 to the 7th power)
            echo pow(2, 7);

            echo "<br>";

            //return a random number with rand
            // specify number range by adding with comma
            echo rand(1, 1000);

            echo "<br>";

            //square root function
            echo sqrt(100);

            echo "<br>";

            //round up to next integer with ceiling function
            echo ceil(4.6);

            echo "<br>";

            //round down to next integer with floor function
            echo floor(5.2);

            //round depending on second number (4.4 would round to 4, 4.5 rounds to 5)
            echo round(4.5);
        ?>

    </body>
</html>