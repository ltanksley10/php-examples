<?php
    //create a super global
    if (isset($_POST['submit'])) {
        echo "yes it works!";
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Form Submissions</title>
    </head>
    <body>
        <form action="formsubmissions.php" method="post">
            <input type="text" placeholder="Enter Username">
            <input type="password" placeholder="Enter Password">
            <input type="submit" name="submit">
        </form>

    </body>
</html>