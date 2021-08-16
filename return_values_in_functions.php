<!Doctype html>
<html>
    <head>
        <title></title>
    </head>

    <?php

        function addNumbers($number1, $number2) {
            $sum = $number1 + $number2;

                return $sum;
        }

        $result = addNumbers(34, 64);

        $result = addNumbers(100, $result);

        echo $result;

        //scopes

        $x = "outside"; //global scope

        function convert() {
            //can also declare global inside of function
            global $x;
            $x = "inside"; //local scope inside function
        }

        echo $x;

        echo "<br>";

        convert();

        echo $x;
        echo $x;

    ?>
</html>