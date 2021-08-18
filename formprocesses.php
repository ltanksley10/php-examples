<?php
    //single page validation
    //create a super global
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $minimum = 5;
        $maximum = 10;
        $names = array("Edwin", "Student", "Yoname", "Myname", "Hername", "Hisname");

        if(strlen($username) < $minimum) {
            echo "Username has to be longer than five characters.";
        }

        if(strlen($username) > $maximum) {
            echo "Username cannot be longer than ten characters.";
        }

        //check to see if username is not in the array
        if(!in_array($username, $names)) {
            echo "Sorry you are not allowed!";
        } else {
            echo "Welcome!";
        }

        // echo "Hello " . $username . " ";
        // echo "your password is " . $password;
    }
?>