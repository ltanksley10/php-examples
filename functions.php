<!DOCTYPE html>
<html>
    <head>
        <title>functions</title>
    </head>
    <body>
        <?php
            
            function init() {
                saySomething();
                calculate();
            }
            init();
            
            function calculate() {
                echo 456 + 345;
            }

            function saySomething() {
                echo "Hello Student, do you like the class?";
                echo "<br/>";
            }

            //parameters
            function greeting($message) {
                echo "<br/>";
                echo $message;
            }

            function thankYou($message) {
                echo "<br/>";
                echo $message;
            }

            greeting("Hello student!");
            greeting("Yes, very much!");
            thankYou("Thank you for teaching me PHP!");
        ?>
    </body>
</html>