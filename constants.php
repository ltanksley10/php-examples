<!DOCTYPE html>
<html>
    <head>
        <title>constants</title>
    </head>
    <body>

        <?php
            $number = 10;
            echo $number . "<br>";

            //if you define a constant it cannot be changed
            // const keyword can also be used to create now like in JS
            define("NAME", 1000);

            echo NAME;
        ?>

    </body>
</html>