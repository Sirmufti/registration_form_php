<?php

    // include_once 'db.inc.php';

    // $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $username = mysqli_real_escape_string($conn, $_POST['username']);
    // $password = mysqli_real_escape_string($conn, $_POST['password']);

    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);



    
    // // Insert Data into a Database
    // $sql = "INSERT INTO users (usersFullname, usersEmail, usersName, usersPassword) VALUES (?, ?, ?, ?);";

    // $stmt = mysqli_stmt_init($conn);

    // if (!mysqli_stmt_prepare($stmt, $sql)) {
    //     echo "SQL Connection failed";
    // }
    // else {
    //     mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $username, $hashed_password);
    //     mysqli_stmt_execute($stmt);
    // }

    // header("Location: ../index.php?registration=success");




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

        if (usernameExists($conn, $username, $email) !== false) {
            header("Location: ../index.php?error=usernametaken");
            exit();
        }

        createUser($conn, $fullname, $email, $username, $password);

    }
        
        else {
            header("Location: ../index.php");
            exit();
}
       

