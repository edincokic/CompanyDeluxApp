<?php

if (isset($_POST ["submit"])) {
    
    $name = $_POST ["name"];
    $password = $_POST ["password"];
    $email = $_POST ["email"];
    
    
    require_once 'data.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $password) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (usernameExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $password);
}
else {
    header("location: ../signup.php");
    exit();
}