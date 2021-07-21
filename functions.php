<!DOCTYPE html>
<html>
    <head>
        <title>functions</title>
    </head>
    <body>
        <?php
            
            function init() {
                saySomething();
                echo "<br/>";
                calculate();
            }
            init();
            
            function calculate() {
                echo 456 + 345;
            }

            function saySomething() {
                echo "Hello Student, do you like the class?";
            }

            //parameters
            function greeting($message) {
                echo $message;
            }

            greeting("Hello student!");

        ?>
    </body>
</html>