<?php

function emptyInputSignup($fullname, $email, $username, $password, $pwdRepeat) {
   

    if (empty($fullname) || empty($email) || empty($username) || empty($password || empty($pwdRepeat))) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;

}

function inValidUsername($username) {
   

    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;  
}

function pwdMatch($password, $pwdRepeat) {
    

    if ($password !== $pwdRepeat) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;  
}

function usernameExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;"; 
    $stmt =mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}


function createUser($conn, $fullname, $email, $username, $password) {
    $sql = "INSERT INTO users (usersFullName, usersEmail, usersName, usersPassword) VALUES (?, ?, ?, ?);"; 
    $stmt =mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../index.php?error=stmtfailed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $username, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: ../index.php?error=none");
    exit();
    
}

