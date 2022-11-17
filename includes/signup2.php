<?php

    // Check if the user has  clicked the signup button

    if (isset($_POST['submit'])) {

        // Include Database Connection
        include_once 'db.inc.php';
        include_once 'functions.inc.php';

        // Get the data from the signup form
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $pwdRepeat = $_POST['pwdRepeat'];

         // Check if inputs are empty
         if (emptyInputSignup($fullname, $email, $username, $password, $pwdRepeat) !== false) {
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
        
        if (inValidUsername($username) !== false) {
            header("Location: ../index.php?error=invaliduusername");
            exit();
        }

        if (invalidEmail($email) !== false) {
            header("Location: ../index.php?error=invalidemail");
            exit();
        }

        if (pwdMatch($password, $pwdRepeat) !== false) {
            header("Location: ../index.php?error=passwordsdontmatch");
            exit();
        }

        if (usernameExists($password, $pwdRepeat, $email) !== false) {
            header("Location: ../index.php?error=usernametaken");
            exit();
        }

        createUser($conn, $fullname, $email, $username, $password);

    }
        
        else {
            header("Location: ../index.php");
            exit();
}
       