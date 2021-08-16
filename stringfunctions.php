<!DOCTYPE html>
<html>
    <head>
        <title>String functions</title>
    </head>
    <body>
    
        <?php

            $string = "Hello student do you like the class";

            echo strlen($string);

            echo "<br>";

            echo strtoupper($string);

            echo "<br>";

            echo strtolower($string);

            //array functions in php

            $list = [343, 3430, 9, 393, 29, 20, 45];

            echo max($list);

            echo "<br>";

            echo min($list);

            echo "<br>";

            sort($list);

            print_r($list);

        ?>

    </body>
</html>