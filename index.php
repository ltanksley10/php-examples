<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $title = "Hello World this is my PHP website!";
        $header = "This is where I'll practice all the cool PHP things.";
        $header2 = "I can't wait to use PHP to develop a fullstack site!";
    ?>
    <h1><?php echo $title; ?></h1>
    <h2><?php echo $header; ?></h2>
    <h3><?php echo $header2; ?></h3>
    <?php
        if (5 < 10) {
            echo "I'm so excited to finally be learning PHP.";
        }

        $numbers = [5, 3, 2, 9, 19];
        foreach($numbers as $number) {
            echo "<br/>" . $number . "<br/>";
        }
    ?>
    
</body>
</html>