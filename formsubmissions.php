<?php
    //create a super global
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "Hello " . $username . " ";
        echo "your password is " . $password;
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Form Submissions</title>
    </head>
    <body>
        <form action="formsubmissions.php" method="post">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit">
        </form>

    </body>
</html>